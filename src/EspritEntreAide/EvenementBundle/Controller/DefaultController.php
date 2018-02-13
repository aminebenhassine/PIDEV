<?php

namespace EspritEntreAide\EvenementBundle\Controller;

use EspritEntreAide\EvenementBundle\Entity\Evenement;
use EspritEntreAide\EvenementBundle\Form\EvenementType;
use EspritEntreAide\EvenementBundle\Form\ModiferEvtType;
use EspritEntreAide\EvenementBundle\Form\RechercheClubType;
use EspritEntreAide\EvenementBundle\Form\RechercheDateType;
use EspritEntreAide\EvenementBundle\Form\RechercheNomType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EvenementBundle:Default:index.html.twig');
    }


    public function ajoutAction(Request $request)
    {
        $evt = new Evenement();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')
            or $this->get('security.authorization_checker')->isGranted('ROLE_RESPONSABLE_SUPER_ADMIN')
            or $this->get('security.authorization_checker')->isGranted('ROLE_RESPONSABLE_CLUB')
            or $this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN')
            or $this->get('security.authorization_checker')->isGranted('ROLE_ENSEIGNANT'))
        {
            $evt->setEtat(0);
        }
        else if ($this->get('security.authorization_checker')->isGranted('ROLE_ETUDIANT')) $evt->setEtat(1);

        $form = $this->createForm(EvenementType::class, $evt);
        $form->handleRequest($request); /*creation d'une session pr stocker les valeurs de l'input*/
        if ($form->isValid()) {
            $evt->setIdUser($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($evt);
            $em->flush();
        }
        return $this->render('@Evenement/Evenement/ajout.html.twig', array(
            'form' => $form->createView()
        ));

    }


    public function modifierAction(Request $request)
    {
        $id=$_GET['id'];
        $evts=$this->getDoctrine()->getRepository('EvenementBundle:Evenement')->find($id);
        $form=$this->createForm(ModiferEvtType::class,$evts);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($evts);
            $em->flush();
            return $this->redirectToRoute('_afficher_events');
        }
        return $this->render ( '@Evenement/Evenement/modifier.html.twig',array('form'=>$form->createView()));

    }


    public function supprimerAction()
    {

        $em = $this->getDoctrine()->getManager();
        $id=$_GET['id'];
        $evt = $em->getRepository("EvenementBundle:Evenement")->find($id);
        $em->remove($evt);
        $em->flush();
        return $this->redirectToRoute('_afficher_events');

    }


    public function afficherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evt = $em->getRepository("EvenementBundle:Evenement")->findAll();
        return $this->render('@Evenement/Evenement/afficher.html.twig', array(
            "evts" => $evt
        ));
        return $this->render('EvenementBundle:Evenement:afficher.html.twig', array(
        ));
    }
    public function rechercheNomAction(Request $request){
        $evt=new Evenement();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(RechercheNomType::class,$evt);
        $form->handleRequest($request);  /*creation d'une session pr stocker les valeurs de l'input*/
        if($form->isValid()){

            $evt=$em->getRepository("EvenementBundle:Evenement")->findBy(array('titreE'=>$evt->getTitreE()));

        }else{
            $evt=$em->getRepository("EvenementBundle:Evenement")->findAll();

        }

        return $this->render('EvenementBundle:Evenement:RechercheNom.html.twig',array(
            'form'=>$form->createView(),'evts'=>$evt
        ));
    }
    public function rechercheDateAction(Request $request){
        $evt=new Evenement();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(RechercheDateType::class,$evt);
        $form->handleRequest($request);  /*creation d'une session pr stocker les valeurs de l'input*/
        if($form->isValid()){

            $evt=$em->getRepository("EvenementBundle:Evenement")->findBy(array('dateE'=>$evt->getDateE()));

        }else{
            $evt=$em->getRepository("EvenementBundle:Evenement")->findAll();

        }

        return $this->render('EvenementBundle:Evenement:RechercheDate.html.twig',array(
            'form'=>$form->createView(),'evts'=>$evt
        ));
    }
    public function rechercheClubAction(Request $request){
        $evt=new Evenement();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(RechercheClubType::class,$evt);
        $form->handleRequest($request);  /*creation d'une session pr stocker les valeurs de l'input*/
        if($form->isValid()){

            $evt=$em->getRepository("EvenementBundle:Evenement")->findBy(array('idClub'=>$evt->getIdClub()));

        }else{
            $evt=$em->getRepository("EvenementBundle:Evenement")->findAll();

        }

        return $this->render('@Evenement/Evenement/RechercheClub.html.twig',array(
            'form'=>$form->createView(),'evts'=>$evt
        ));
    }
}
