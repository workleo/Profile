<?php

namespace AppBundle\Component;


interface SimpleMailInterface
{
         public function sendSimpleMail($name,$email,$message):string ;
}