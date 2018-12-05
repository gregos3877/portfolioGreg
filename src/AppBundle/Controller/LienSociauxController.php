<?php

namespace AppBundle\Controller;

use AppBundle\Entity\LienSociaux;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Liensociaux controller.
 *
 * @Route("liensociaux")
 */
class LienSociauxController extends Controller
{
    /**
     * Lists all lienSociaux entities.
     *
     * @Route("/", name="liensociaux_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $lienSociaux = $em->getRepository('AppBundle:LienSociaux')->findAll();

        if ($lienSociaux == null) {
            $lienSociaux = new LienSociaux();
            $em->persist($lienSociaux);
            $em->flush();
        }
        else {
            $lienSociaux = $lienSociaux[0];
        }

        $editForm = $this->createForm('AppBundle\Form\LienSociauxType', $lienSociaux);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashboard');
        }

        return $this->render('liensociaux/index.html.twig', array(
            'lienSociaux' => $lienSociaux,
            'edit_form' => $editForm->createView(),
        ));
    }

}
