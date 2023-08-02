<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'resa')]
    public function reservation(): Response
    {

        //dd($_POST);
        $villeDepart = $_POST['villedepart'];
        $villeDarrivee =$_POST['villearrive'];
        $nombrePassagers =(int)$_POST['nbrePassager'];// quand (int) avec un string est égal a 0
        $dateResa =$_POST['dateresa'];
        $errors = [];// liste d'erreur lors de la vérification
        
        if ($nombrePassagers <= 0) {
            $errors["nbrePassager"] = "Valeur non recevable";
        }
        
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]); 
    }
}