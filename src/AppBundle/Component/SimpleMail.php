<?php

namespace AppBundle\Component;

class SimpleMail implements SimpleMailInterface
{

    public function sendSimpleMail($name, $email, $message):string
    {
        $errorMSG = "";
        if ($name === '') {
            $errorMSG = "Name is required ";
        }
        if ($email === '') {
            $errorMSG .= "Email is required ";
        }
        if ($message === '') {
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

        if (($errorMSG == "") && ($success === true)) {
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

}