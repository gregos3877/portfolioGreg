<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    /**
     * @Route("/backend/monCompte", name="mon_compte")
     */
    public function monCompteAction(Request $request)
    {

        $form = $this->createForm(UserType::class, $this->getUser());
//        dump($form);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('dashboard');

        }

        return $this->render('backend/monCompte.html.twig', array(
            'form'  => $form->createView()
        ));
    }
}
