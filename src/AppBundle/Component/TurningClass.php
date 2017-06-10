<?php

namespace AppBundle\Component;

use Symfony\Component\HttpFoundation\Session\Session;

class TurningClass
{
    private $postCaptha;
    private $sessionPage;
    private $imgSrc;
    private $url;
    private $answer;


    public function __construct(Session $session)
    {

        $this->postCaptha = null;
        if (isset($_POST['captch'])) $this->postCaptha = $_POST['captch'];

        $this->sessionPage = null;
        if ($session->has('page')) {
            $this->sessionPage = $session->get('page');
        }

        if (($this->sessionPage != null) && ($this->sessionPage == 'start_page')
            && ($this->postCaptha != null)
        ) {
            if (strtolower($_POST['captch']) != strtolower($session->get('captch'))) {
                $this->imgSrc = '/image/badrobot.gif';
                $this->answer = 'You bad-bad robot!';
                $this->url ='/index';
            } else {
                $this->imgSrc = '/image/dancing-baby.gif';
                $this->answer = "Congratulations!\n You are human !";
                $this->url = '/person/profile';
            }
        } else {
            $this->answer = 'I\'ll be back!';
            $this->imgSrc = '/image/mbeback.jpg';
            $this->url = '/index';//'/index';
        }
    }


    public function getUrl(): string
    {
        return $this->url;
    }


    public function getImgSrc(): string
    {
        return $this->imgSrc;
    }


    public function getAnswer(): string
    {
        return $this->answer;
    }


}