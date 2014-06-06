<?php

namespace Mobly\MoblyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class XmlController extends Controller
{
    public function xmlAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MoblyMoblyBundle:PurchaseOrder')->findAll();
        
        $format = $this->getRequest()->getRequestFormat();

        return $this->render('MoblyMoblyBundle:Xml:index.'.$format.'.twig',
                array('entity' => $entities));
    }

}
