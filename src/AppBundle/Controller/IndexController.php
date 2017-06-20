<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\CaptchaGenerator;
use AppBundle\Component\AskingClass;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class IndexController extends Controller
{
    /**
     * @Route("/index", name="index")
     * @param Request $request
     * @param SessionInterface $session
     * @param CaptchaGenerator $captchaGenerator
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */


    public function indexAction(Request $request, SessionInterface $session,CaptchaGenerator $captchaGenerator)
    {
        $session->set('page', 'start_page');
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('turn'))
            ->setMethod('POST')
            ->getForm();
        $form->handleRequest($request);
        $captcha=$captchaGenerator->prepare_captcha(300, 100, $session);

        return $this->render('index.html.twig', array(
            'form' => $form->createView(),
            'captcha' => $captcha,
            'person' => AskingClass::ask_about_person(),
        ));
    }

}