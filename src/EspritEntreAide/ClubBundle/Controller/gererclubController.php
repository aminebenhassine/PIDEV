<?php

namespace EspritEntreAide\ClubBundle\Controller;

use EspritEntreAide\ClubBundle\Entity\Club;
use EspritEntreAide\ClubBundle\Form\ClubType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class gererclubController extends Controller
{

    public function AjoutAction(Request $request)
    {
        $cl = new Club();
        $form = $this->createForm(ClubType::class, $cl);
        $form->handleRequest($request);/*creation d'une session pr stocker les valeurs de l'input*/
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cl);
            $em->flush();
        }
        return $this->render('@Club/Default/ajoutclub.html.twig', array(
            'form' => $form->createView()
        ));
    }






}
