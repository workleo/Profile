<?php

namespace AppBundle\Repository;

use AppBundle\Entity\ProfileEntity;

class ProfileControllerTest extends ProfileController
{

    /**
     * ProfileControllerTest constructor.
     */
    public function __construct()
    {
        $profile = new ProfileEntity();

        $profile->setDedication('It\'s dedicated to fans of The South Park');
        $profile->setBackImageSrc('/image/back_flag.jpeg');
        $profile->setDescriptEn('All characters and events in this show—even those based on' .
            'real people—are entirely fictional. All celebrity voices are impersonated... poorly.' .
            'The following program contains coarse language and due to its content it should not be viewed by anyone');
        $profile->setDescriptRu('...Этот фильм содержит нецензурную лексику и сцены насилия, поэтому его не следует' .
            'смотреть…НИКОМУ');
        $profile->setPersonImage('/image/cartman.jpg');
        $profile->setPersonVideo('/video/01_Hate_hd.webm');

        $profile->setSkillVideoArray(array(
            array('video' => '/video/02_Manipulation_hd.webm', 'name' => 'Manipulation', 'proc' => '70%'),
            array('video' => '/video/03_Strategic.webm', 'name' => 'Strategic skills', 'proc' => '51%'),
            array('video' => '/video/04_Charisma.webm', 'name' => 'Charisma', 'proc' => '75%'),
            array('video' => '/video/05_Sumo.webm', 'name' => 'Sumo wrestling skills', 'proc' => '30%')));


        $profile->setSelectVideoTitle('A Level of bulling abilities');
        $profile->setSelectVideoName('Select one bulling');

        $profile->setSelectVideoArray(array(
            array('name' => '1.Kyle\'s mom lyrics', 'video' => '/video/06_KyleMom_hd.webm'),
            array('name' => '2.Мама Кайла (ненормативная лексика)', 'video' => '/video/07_KyleMom_hd.webm')));
        $profile->setSelectVideoProc('99%');
        $profile->setPersonName('Eric Theodore');
        $profile->setPersonSurname('Cartman');
        $profile->setPersonOccupation('An elementary school student');
        $profile->setPersonGender('An american boy');
        $profile->setPersonAliasArray(array('Fatass', 'A.W.E.S.O.M.-O 4000', 'Fatty Doo-Doo', 'Asshole'));

        $profile->setPersonCatchPhrases(array(
            array('wav' => '/audio/cartman-going-home.wav', 'phrase' => 'Screw you guys! I\'ma-going home!', 'id' => 'wav00'),
            array('wav' => '/audio/Respct.wav', 'phrase' => 'Respect my authoritah!', 'id' => 'wav01'),
            array('wav' => '/audio/notfat.wav', 'phrase' => 'I\'m not fat, I\'m big boned!', 'id' => 'wav02')));


        $profile->setPersonResidence(array('name' => 'South Park, Colorado,USA',
            'url' => 'https://www.google.com/maps/d/viewer?mid=1JNq88ZiK_Mji54heayOOr0iUaIo&hl=en_US&ll=39.21355254056336%2C-105.98078698419192&z=14'));

        $profile->setPersonPhone('(412) 831-7000');
        $profile->setPersonMessageTips(array('like' => 'I love You Eric!', 'neutral' => 'Clear', 'hate' => 'I hate You Cartman!'));
        $profile->setPersonMailFormUrl('/person/mailForm');

        $profile->setPersonMailComment(array(
            array('mess' => 'I', 'class' => 'checkbox-danger'),
            array('mess' => 'Love', 'class' => 'checkbox-warning'),
            array('mess' => 'You', 'class' => 'checkbox-success'),
            array('mess' => 'too', 'class' => 'checkbox-primary')));
        $this->create($profile);
    }
}