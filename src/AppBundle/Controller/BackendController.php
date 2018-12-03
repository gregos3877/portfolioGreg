<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BackendController extends Controller
{
    /**
     * @Route("/dashboard")
     */
    public function dashboardAction()
    {
        return $this->render('AppBundle:Backend:dashboard.html.twig', array(
            // ...
        ));
    }

}
