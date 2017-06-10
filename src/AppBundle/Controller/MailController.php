<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MailController extends Controller
{

    protected function checkPost(Request $request):string
    {
        $errorMSG = "";
        $name = '';

        if ($request->request->has('name')) {
            $name = $request->request->get('name');
        } else {
            $errorMSG = "Name is required ";
        }

        $email = '';
        if ($request->request->has('email')) {
            $email = $request->request->get('email');
        } else {
            $errorMSG .= "Email is required ";
        }

        $message = '';
        if ($request->request->has('message'))  {
            $message = $request->request->get('message');
        } else {
            $errorMSG .= "Message is required ";
        }

        $emailTo = "antropoid2017@gmail.com";
        $subject = "New Message Received";

        $messageBody = "";
        $messageBody .= "Name: ";
        $messageBody .= $name;
        $messageBody .= "\n";
        $messageBody .= "Email: ";
        $messageBody .= $email;
        $messageBody .= "\n";
        $messageBody .= "Message: ";
        $messageBody .= $message;
        $messageBody .= "\n";

        $success = $this->sendMail($emailTo, $email, $subject, $messageBody);

        if (($errorMSG == "") && ($success===true)) {
            return "success";
        } else {
            if ($errorMSG == "") {
                return "Something went wrong :(";
            } else {
                return $errorMSG;
            }
        }
    }

    protected function sendMail($to, $from, $title, $messageBody)
    {
        $subject = $title;
        $subject = '=?utf-8?b?' . base64_encode($subject) . '?=';
        $headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
        $headers .= "From: " . $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Date: " . date('D, d M Y h:i:s O') . "\r\n";

        if (!mail($to, $subject, $messageBody, $headers))
            return 'Something went wrong!';
        else
            return true;
    }

    /**
     * @Route("/person/mailForm", name="mailForm")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function sendAction(Request $request)
    {
        echo($this->checkPost($request));
        $response = new Response();
        $response->setStatusCode(200);
        return new $response();
    }
}