<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Component\TurningClass;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class TurningController extends Controller
{
    /**
     * @Route("/person/turn", name="turn")
     * @param Request $request
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */

    public function turningAction(Request $request, SessionInterface $session)
    {
        $turn = new TurningClass($session, $request);

        $form = $this->createFormBuilder()->getForm();
        $form->handleRequest($request);

        $content = $this->render('/person/turn.html.twig', array(
            'form' => $form->createView(),
            'picture' => $turn->getImgSrc(),
            'answer' => $turn->getAnswer(),
        ));


        $response = new Response(null, Response::HTTP_OK);
        $response->headers->set('Refresh', '3; url=' . $turn->getUrl());
        $response->send();
        return new $response($content);

    }
}