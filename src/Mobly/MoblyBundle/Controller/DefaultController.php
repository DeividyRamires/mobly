<?php

namespace Mobly\MoblyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MoblyMoblyBundle:Default:index.html.twig');
    }
}
