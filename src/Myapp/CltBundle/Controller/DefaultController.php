<?php

namespace Myapp\CltBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\CroisiereBundle\Entity\Agence;
use Myapp\CroisiereBundle\Entity\Croisiere;

use Myapp\CroisiereBundle\Entity\CroisiereSearsh;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
   
        $CroisiereSearsh = new CroisiereSearsh();
         $form=$this->creatformSelect($CroisiereSearsh);
        return $this->render('CltBundle:Default:index.html.twig', array(
           'form' => $form->createView()));
    }
 public function searchAction(Request $request)
    {
        
          $Croisiereleft =new Croisiere();
                    $CroisiereRight =new Croisiere();
     
     
                    $CroisiereSearsh = new CroisiereSearsh();
                    $form=$this->creatformSelect($CroisiereSearsh);
                    $form->handleRequest($request);
               
         if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager(); 
            $CroisiereCtl=new Croisiere();          
            $CroisiereCtl->setDestination($CroisiereSearsh->destination);
            //$CroisiereCtl->getPortsDedepart()
     if ($CroisiereCtl->getDestination()!=null &&  
        $CroisiereSearsh->Bateau  !=null  && 
         $CroisiereSearsh->portsDedepart  !=null )    
      {
      $Croisiereleft = $em->getRepository('CroisiereBundle:Croisiere')
      ->findBy(array('Bateau' =>  $CroisiereSearsh->Bateau,
                   'destination' =>  $CroisiereSearsh->destination->getDestination(),
                   'portsDedepart' =>   $CroisiereSearsh->portsDedepart->getPortsDedepart()
                    ));
       } 
      else if ($CroisiereCtl->getDestination()!=null &&  
        $CroisiereSearsh->Bateau  !=null  && 
         $CroisiereSearsh->portsDedepart  ==null)
       {   
       $Croisiereleft = $em->getRepository('CroisiereBundle:Croisiere')
       ->findBy(array('Bateau' =>  $CroisiereSearsh->Bateau,
                   'destination' =>  $CroisiereSearsh->destination->getDestination(),
                   
                             
                   ));
        }
        else if ($CroisiereCtl->getDestination()==null &&  
               $CroisiereSearsh->Bateau  !=null  && 
                $CroisiereSearsh->portsDedepart  ==null)
       { 
       $Croisiereleft = $em->getRepository('CroisiereBundle:Croisiere')
       ->findBy(array('Bateau' =>  $CroisiereSearsh->Bateau,));
        }
         else if ($CroisiereCtl->getDestination()!=null &&  
               $CroisiereSearsh->Bateau  ==null  && 
                $CroisiereSearsh->portsDedepart  ==null)
       {
       $Croisiereleft = $em->getRepository('CroisiereBundle:Croisiere')
      ->findBy(array('destination' =>  $CroisiereSearsh->destination->getDestination(),));
     
        }
         else if ($CroisiereCtl->getDestination()==null &&  
               $CroisiereSearsh->Bateau  ==null  && 
                $CroisiereSearsh->portsDedepart  !=null)
       {
       $Croisiereleft = $em->getRepository('CroisiereBundle:Croisiere')
      ->findBy(array('portsDedepart' =>  $CroisiereSearsh->portsDedepart->getPortsDedepart(),));
     
        }
       else      {
       
       $Croisiereleft = $em->getRepository('CroisiereBundle:Croisiere')
       ->findAllCroisiere(0);  
         $CroisiereRight = $em->getRepository('CroisiereBundle:Croisiere')
       ->findAllCroisiere(1); 
        }
        }
        return $this->render('CltBundle:Default:search.html.twig', array(
            'Croisiereleft'=>$Croisiereleft,
             'CroisiereRight'=>$CroisiereRight,
          'portsDedepart' =>  $CroisiereSearsh->portsDedepart,
           'form' => $form->createView()));
    }

    
    
    
    

public function creatformSelect($CroisiereSearsh)
{
    $form = $this->createFormBuilder($CroisiereSearsh
       , array(
            'action' => $this->generateUrl('search_croisiere'),
            'method' => 'POST',
        ))
         ->add('destination','entity', array(
            'class' => 'Myapp\CroisiereBundle\Entity\Croisiere',
            'property' => 'destination',
                         'empty_value' => 'Any Destinations',
            'multiple' => false,
            'required' => false
            ))
         ->add('Bateau','entity', array(
            'class' => 'Myapp\CroisiereBundle\Entity\Bateau',
            'property' => 'nomBateau',
                         'empty_value' => 'Any Ship',
            'multiple' => false,
            'required' => false
            ))
                  ->add('portsDedepart','entity', array(
            'class' => 'Myapp\CroisiereBundle\Entity\Croisiere',
            'property' => 'portsDedepart',
                         'empty_value' => 'Any Departure Port',
            'multiple' => false,
            'required' => false
            ))
         ->add('submit', 'submit', array('label' => 'Searsh'))
         ->getForm();
    return $form;

}






}