<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Component\TurningClass;

class TurningController extends Controller
{
    /**
     * @Route("/person/turn", name="turn")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */


    public function turningAction(Request $request)
    {
        $session = $request->getSession();
        if ($session === null) {
            $session = new Session();
        }
        if ($session->isStarted() === false) {
            $session->start();
        }
        $sn=$request->server->get('SCRIPT_NAME');
        $turn = new TurningClass($session);

        $form = $this->createFormBuilder()->getForm();
        $form->handleRequest($request);



        $content = $this->render('/person/turn.html.twig', array(
            'form' => $form->createView(),
            'picture' => $turn->getImgSrc(),
            'answer' => $turn->getAnswer(),
        ));


        $response = new Response();
        $response->setStatusCode(200);
        $response->headers->set('Refresh', '3; url=' . $turn->getUrl() );
        $response->send();
        return new $response($content);
    }
}