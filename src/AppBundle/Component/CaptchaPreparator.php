<?php

namespace AppBundle\Component;

use Minho\Captcha\CaptchaBuilder;
use Symfony\Component\HttpFoundation\Session\Session;

class CaptchaPreparator
{
    static public function prepare_captcha($_width, $_height, Session $session)
    {
        if ($session !== null) {
            $captch = new CaptchaBuilder();
            $captch->initialize([
                'width' => $_width,
                'height' => $_height,
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