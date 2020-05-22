<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Turno;
class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api",methods={"GET"})
     */
    public function index()
   
    /**
     * @Route("/sacar_turno/$idcola", name="sacar_turno",methods={"GET"})
     */
    public function sacar_turno($idcola){
        if(!$idcola){
            throw $this->createNotFoundException('The product does not exist');

    }

    $sacar_turno =$this->getDoctrine()->getRepository(Turno::class)->find($idcola);}
    return $this->json(['data'=>$sacar_turno]); 
    /**
     * @Route("/atender_proximo/", name="atender_proximo",methods={"GET"})
     */
    public function atender_proximo(){
        if(!$idcola){
            throw $this->createNotFoundException('The product does not exist');

        }

    }
}
