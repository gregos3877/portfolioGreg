<?php

namespace AppBundle\Controller;

use AppBundle\Entity\EmailInterested;
use AppBundle\Form\EmailInterestedType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
        $lienSociaux = $this->getDoctrine()->getRepository('AppBundle:LienSociaux')->findAll();
        $listeProjet = $this->getDoctrine()->getRepository('AppBundle:Projet')->findAll();
        $email = new EmailInterested();
        $form = $this->createForm(EmailInterestedType::class, $email);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($email);
            $em->flush();

            $email = new EmailInterested();
            $form = $this->createForm(EmailInterestedType::class, $email);
        }

        return $this->render('default/index.html.twig', array(
            'user'          => $user[0],
            'lienSociaux'   => $lienSociaux[0],
            'form'          => $form->createView(),
            'listeProjet'   => $listeProjet,
        ));

    }

}
