<?php

namespace App\Controller;

use App\Entity\Turno;
use App\Form\TurnosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TurnosController extends AbstractController
{
    /**
     * @Route("/turnos", name="turnos")
     */
    public function index(Request $request)
    {
        $turno = new turno();
        $form = $this->createForm(TurnosType::class,$turno);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $username= $this->getUser('Username');
            $turno->setUsername($username);
            $em=$this->getDoctrine()->getManager();
            $em->persist($turno);
            $em->flush();
            return $this->redirectToRoute('dashboard');
        }
        return $this->render('turnos/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
