<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BackendController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {
        return $this->render('backend/dashboard.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/monCompte", name="mon_compte")
     */
    public function monCompteAction()
    {
        return $this->render('backend/monCompte.html.twig');
    }

}
