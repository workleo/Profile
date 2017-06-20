<?php

namespace AppBundle\Entity;


class ProfileEntity
{
    private $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
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
    private $personCatchPhrases;
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


    public function getPersonCatchPhrases(): array
    {
        return $this->personCatchPhrases;
    }


    public function setPersonCatchPhrases(array $personCatchPhrases)
    {
        $this->personCatchPhrases = $personCatchPhrases;
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