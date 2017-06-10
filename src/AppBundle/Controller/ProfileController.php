<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ProfileEntity;

class ProfileController extends Controller
{


    /**
     * @Route("/person/profile", name="profile")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function turningAction(Request $request)
    {
        $request->server->get('SCRIPT_NAME');
        $profile = new ProfileEntity();

        return $this->render('/person/profile.html.twig', array(
            'person'=>$profile,
        ));
    }
}