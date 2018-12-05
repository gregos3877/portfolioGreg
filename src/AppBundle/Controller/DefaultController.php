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

        $email = new EmailInterested();
        $form = $this->createForm(EmailInterestedType::class, $email);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($email);
            $em->flush();
        }

//        }


//        $message = (new \Swift_Message('Hello Email'))
//            ->setFrom('send@example.com')
//            ->setTo('recipient@example.com')
//            ->setBody(
//                $this->renderView(
//                // app/Resources/views/Emails/registration.html.twig
//                    'Emails/registration.html.twig',
//                    array('name' => $name)
//                ),
//                'text/html'
//            )
//            /*
//             * If you also want to include a plaintext version of the message
//            ->addPart(
//                $this->renderView(
//                    'Emails/registration.txt.twig',
//                    array('name' => $name)
//                ),
//                'text/plain'
//            )
//            */
//        ;
//
//        $mailer->send($message);


        return $this->render('default/index.html.twig', array(
            'user'          => $user[0],
            'lienSociaux'   => $lienSociaux[0],
            'form'          => $form->createView(),
        ));
    }

}
