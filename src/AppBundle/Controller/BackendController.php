<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BackendController extends Controller
{
    /**
     * @Route("/backend/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {
        return $this->render('backend/dashboard.html.twig', array(
            // ...
        ));
    }


}
