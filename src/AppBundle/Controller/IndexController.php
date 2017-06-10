<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Component\CaptchaPreparator;
use AppBundle\Component\AskingClass;


class IndexController extends Controller
{
    /**
     * @Route("/index", name="index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */


    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if ($session === null) {
            $session = new Session();
        }
        if ($session->isStarted() === false) {
            $session->start();
            $session->set('page', 'start_page');
        }

        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('turn'))
            ->setMethod('POST')
            ->getForm();
        $form->handleRequest($request);

        return $this->render('index.html.twig', array(
            'form' => $form->createView(),
            'captcha' => CaptchaPreparator::prepare_captcha(300, 100, $session),
            'person' => AskingClass::ask_about_person(),
        ));
    }

}