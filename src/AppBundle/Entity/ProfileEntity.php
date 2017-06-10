<?php

namespace AppBundle\Entity;


class ProfileEntity
{
    private $dedication;
    private $backImageSrc;
    private $descriptEn;
    private $descriptRu;
    private $personImage;
    private $personVideo;
    private $skillVideoArray;
    private $selectVideoTitle;
    private $selectVideoName;
    private $selectVideoArray;
    private $selectVideoProc;
    private $personName;
    private $personSurname;
    private $personOccupation;
    private $personGender;
    private $personAliasArray;
    private $personCatchphrases;
    private $personResidence;
    private $personPhone;
    private $personMessageTips;
    private $personMailFormUrl;
    private $personMailComment;

    public function getBackImageSrc(): string
    {
        return $this->backImageSrc;
    }


    public function setBackImageSrc(string $backImageSrc)
    {
        $this->backImageSrc = $backImageSrc;
    }


    public function __construct()
    {
        $this->dedication = 'It\'s dedicated to fans of The South Park';
        $this->backImageSrc = '/image/back_flag.jpeg';
        $this->descriptEn = 'All characters and events in this show—even those based on' .
            'real people—are entirely fictional. All celebrity voices are impersonated... poorly.' .
            'The following program contains coarse language and due to its content it should not be viewed by anyone';
        $this->descriptRu = '...Этот фильм содержит нецензурную лексику и сцены насилия, поэтому его не следует' .
            'смотреть…НИКОМУ';
        $this->personImage = '/image/cartman.jpg';
        $this->personVideo = '/video/01_Hate_hd.webm';
        $this->skillVideoArray = array(
            array('video' => '/video/02_Manipulation_hd.webm', 'name' => 'Manipulation', 'proc' => '70%'),
            array('video' => '/video/03_Strategic.webm', 'name' => 'Strategic skills', 'proc' => '51%'),
            array('video' => '/video/04_Charisma.webm', 'name' => 'Charisma', 'proc' => '75%'),
            array('video' => '/video/05_Sumo.webm', 'name' => 'Sumo wrestling skills', 'proc' => '30%'));
        $this->selectVideoTitle = 'A Level of bulling abilities';
        $this->selectVideoName = 'Select one bulling';
        $this->selectVideoArray = array(
            array('name' => '1.Kyle\'s mom lyrics', 'video' => '/video/06_KyleMom_hd.webm'),
            array('name' => '2.Мама Кайла (ненормативная лексика)', 'video' => '/video/07_KyleMom_hd.webm'));
        $this->selectVideoProc = '99%';

        $this->personName = 'Eric Theodore';
        $this->personSurname = 'Cartman';
        $this->personOccupation = 'An elementary school student';
        $this->personGender = 'An american boy';
        $this->personAliasArray = array('Fatass', 'A.W.E.S.O.M.-O 4000', 'Fatty Doo-Doo', 'Asshole');

        $this->personCatchphrases = array(
            array('wav' => '/audio/cartman-going-home.wav', 'phrase' => 'Screw you guys! I\'ma-going home!', 'id' => 'wav00'),
            array('wav' => '/audio/Respct.wav', 'phrase' => 'Respect my authoritah!', 'id' => 'wav01'),
            array('wav' => '/audio/notfat.wav', 'phrase' => 'I\'m not fat, I\'m big boned!', 'id' => 'wav02')
        );

        $this->personResidence = array('name' => 'South Park, Colorado,USA',
            'url' => 'https://www.google.com/maps/d/viewer?mid=1JNq88ZiK_Mji54heayOOr0iUaIo&hl=en_US&ll=39.21355254056336%2C-105.98078698419192&z=14');

        $this->personPhone = '(412) 831-7000';
        $this->personMessageTips = array('like' => 'I love You Eric!', 'neutral' => 'Clear', 'hate' => 'I hate You Cartman!');
        $this->personMailFormUrl = '/person/mailForm';

        $this->personMailComment = array(
            array('mess' => 'I', 'class' => 'checkbox-danger'),
            array('mess' => 'Love', 'class' => 'checkbox-warning'),
            array('mess' => 'You', 'class' => 'checkbox-success'),
            array('mess' => 'too', 'class' => 'checkbox-primary'));
    }


    public function getPersonMailComment(): array
    {
        return $this->personMailComment;
    }


    public function setPersonMailComment(array $personMailComment)
    {
        $this->personMailComment = $personMailComment;
    }


    public function getPersonMailFormUrl(): string
    {
        return $this->personMailFormUrl;
    }


    public function setPersonMailFormUrl(string $personMailFormUrl)
    {
        $this->personMailFormUrl = $personMailFormUrl;
    }


    public function getPersonMessageTips(): array
    {
        return $this->personMessageTips;
    }


    public function setPersonMessageTips(array $personMessageTips)
    {
        $this->personMessageTips = $personMessageTips;
    }


    public function getPersonPhone(): string
    {
        return $this->personPhone;
    }


    public function setPersonPhone(string $personPhone)
    {
        $this->personPhone = $personPhone;
    }


    public function getPersonResidence(): array
    {
        return $this->personResidence;
    }

    public function setPersonResidence(array $personResidence)
    {
        $this->personResidence = $personResidence;
    }


    public function getPersonCatchphrases(): array
    {
        return $this->personCatchphrases;
    }


    public function setPersonCatchphrases(array $personCatchphrases)
    {
        $this->personCatchphrases = $personCatchphrases;
    }


    public function getSelectVideoProc(): string
    {
        return $this->selectVideoProc;
    }


    public function setSelectVideoProc(string $selectVideoProc)
    {
        $this->selectVideoProc = $selectVideoProc;
    }


    public function getPersonAliasArray(): array
    {
        return $this->personAliasArray;
    }


    public function setPersonAliasArray(array $personAliasArray)
    {
        $this->personAliasArray = $personAliasArray;
    }


    public function getPersonGender(): string
    {
        return $this->personGender;
    }

    public function setPersonGender(string $personGender)
    {
        $this->personGender = $personGender;
    }

    public function getPersonOccupation(): string
    {
        return $this->personOccupation;
    }

    public function setPersonOccupation(string $personOccupation)
    {
        $this->personOccupation = $personOccupation;
    }

    public function getPersonSurname(): string
    {
        return $this->personSurname;
    }

    public function setPersonSurname(string $personSurname)
    {
        $this->personSurname = $personSurname;
    }

    public function getPersonName(): string
    {
        return $this->personName;
    }

    public function setPersonName(string $personName)
    {
        $this->personName = $personName;
    }


    public function setDedication($dedication)
    {
        $this->dedication = $dedication;
    }

    public function getDedication(): string
    {
        return $this->dedication;
    }

    public function getDescriptEn(): string
    {
        return $this->descriptEn;
    }

    public function setDescriptEn(string $descriptEn)
    {
        $this->descriptEn = $descriptEn;
    }

    public function getDescriptRu(): string
    {
        return $this->descriptRu;
    }

    public function setDescriptRu(string $descriptRu)
    {
        $this->descriptRu = $descriptRu;
    }


    public function getPersonImage(): string
    {
        return $this->personImage;
    }


    public function setPersonImage(string $personImage)
    {
        $this->personImage = $personImage;
    }


    public function getPersonVideo(): string
    {
        return $this->personVideo;
    }


    public function setPersonVideo(string $personVideo)
    {
        $this->personVideo = $personVideo;
    }


    public function getSkillVideoArray(): array
    {
        return $this->skillVideoArray;
    }


    public function setSkillVideoArray(array $skillVideoArray)
    {
        $this->skillVideoArray = $skillVideoArray;
    }

    public function getSelectVideoTitle(): string
    {
        return $this->selectVideoTitle;
    }

    public function setSelectVideoTitle(string $selectVideoTitle)
    {
        $this->selectVideoTitle = $selectVideoTitle;
    }

    public function getSelectVideoArray(): array
    {
        return $this->selectVideoArray;
    }

    public function setSelectVideoArray(array $selectVideoArray)
    {
        $this->selectVideoArray = $selectVideoArray;
    }

    public function getSelectVideoName(): string
    {
        return $this->selectVideoName;
    }

    public function setSelectVideoName(string $selectVideoName)
    {
        $this->selectVideoName = $selectVideoName;
    }


}