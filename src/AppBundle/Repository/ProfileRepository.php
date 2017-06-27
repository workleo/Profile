<?php
namespace  AppBundle\Repository;

use AppBundle\Entity\ProfileEntity;

class ProfileRepository
{

    private $profiles;

    function create(ProfileEntity $profile)
    {
        $id = count($this->profiles);
        $profile->setId($id);
        $this->profiles[$id] = $profile;
        return $this;
    }

    function getAll(): array
    {
        return $this->profiles;
    }

    function find(int $id): ProfileEntity
    {
        if(!array_key_exists($id, $this->profiles)){
            throw new \InvalidArgumentException('Profile with given id does not exist');
        }

        return $this->profiles[$id];
    }

    function delete(ProfileEntity $profile)
    {
        unset($this->profiles[$profile->getId()]);
    }
}