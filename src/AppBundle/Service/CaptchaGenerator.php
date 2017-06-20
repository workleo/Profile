<?php

namespace AppBundle\Service;

use Minho\Captcha\CaptchaBuilder;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CaptchaGenerator
{

    function prepare_captcha(int $width, int $height, SessionInterface $session)
    {
        if ($session !== null) {
            $captch = new CaptchaBuilder();
            $captch->initialize([
                'width' => $width,
                'height' => $height,
                'line' => true,
                'curve' => true,
                'noise' => 8,
                'fonts' => []
            ]);

            $captch->create();

            $session->set('captch', $captch->getText());
            ob_start();
            $captch->save(null, 5);
            $output = ob_get_contents();
            ob_end_clean();
            $captch->destroy();
            return base64_encode($output);
        } else {
            return '';
        }

    }
}