<?php


namespace AppBundle\Controller;

use AppBundle\Component\SimpleMailInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MailController extends Controller
{


    /**
     * @Route("/person/mailForm", name="mailForm")
     * @param Request $request
     * @param SimpleMailInterface $simpleMail
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function sendAction(Request $request, SimpleMailInterface $simpleMail)
    {

        echo $simpleMail->sendSimpleMail(
            $request->get('name'),
            $request->get('email'),
            $request->get('message')
        );

        return new Response(
            null,
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );
    }
}