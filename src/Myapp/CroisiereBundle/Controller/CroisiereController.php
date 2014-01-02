<?php

namespace Myapp\CroisiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\CroisiereBundle\Entity\Bateau;
use Myapp\CroisiereBundle\Entity\Agence;
use Myapp\CroisiereBundle\Entity\BateauTypeCabine;
use Myapp\CroisiereBundle\Entity\Croisiere;

use Myapp\CroisiereBundle\Form\imageCrosType;
use Myapp\CroisiereBundle\Entity\imageCros;

use Myapp\CroisiereBundle\Form\CroisiereType;

/**
 * Croisiere controller.
 *
 */
class CroisiereController extends Controller
{

    /**
     * Lists all Croisiere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CroisiereBundle:Croisiere')->findAll();

        return $this->render('CroisiereBundle:Croisiere:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Croisiere entity.
     *
     */
    public function createAction(Request $request,$id)
    {
        $entity = new Croisiere();
        $form = $this->createCreateForm($entity,$id);
        $form->handleRequest($request);

        
        
        
        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $Bateau=new Bateau();
            $Bateau = $em->getRepository('CroisiereBundle:Bateau')->find($id);
            $entity->setBateau($Bateau);
           
            $entity->upload();
          

            $em->persist($entity);
            
        
            
            $em->flush();

            return $this->redirect($this->generateUrl('escale_new', array('id' => $entity->getId())));
        }

        return $this->render('CroisiereBundle:Croisiere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
           'form3'      => $form3->createView(),
         

        ));
    }
    
 
    

    /**
    * Creates a form to create a Croisiere entity.
    *
    * @param Croisiere $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Croisiere $entity,$id)
    {
        $form = $this->createForm(new CroisiereType(), $entity, array(
            'action' => $this->generateUrl('croisiere_create' , array('id'=> $id)),
            'method' => 'POST',
        ));
        $form->add('Pension','entity', array(
            'class' => 'Myapp\CroisiereBundle\Entity\Pension',
            'property' => 'typePension',
            'multiple' => false,
            'required' => false
            ));
                  $form->add('file','file');

       
        $form->add('submit', 'submit', array('label' => 'Create'));
  
        

        return $form;
    }
    




    /**
     * Displays a form to create a new Croisiere entity.
     *
     */
    public function newAction($id)
    { 
        
        $entity = new Croisiere();
        $form   = $this->createCreateForm($entity,$id);
     $Agence=new Agence();
        $Bateau=new Bateau();
        $em = $this->getDoctrine()->getManager();

         $Bateau = $em->getRepository('CroisiereBundle:Bateau')->find($id);
          $Agence=$Bateau->getAgence();         
          $Bateau = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:Bateau')
              ->findByIdJoinedToAgence($Agence->getId());
       /*   
          $entityTypeCabine =new BateauTypeCabine();
           $entityTypeCabine= $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:BateauTypeCabine')
                         ->findByIdJoinedToBateau($Bateau->getId());
           */
        return $this->render('CroisiereBundle:Croisiere:new.html.twig', array(
            'entity2'=>$Agence,
            'entityBateau'=>$Bateau,
            'entity'    => $entity,
            'form'      => $form->createView(),

        ));
    }

    /**
     * Finds and displays a Croisiere entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Croisiere=new Croisiere();
        $Bateau = $em->getRepository('CroisiereBundle:Bateau') ->find($id);
        $Croisiere = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:Croisiere')
                         ->findByIdJoinedToBateau($id);
          $Bateau = $em->getRepository('CroisiereBundle:Bateau')->find($id);
          $Agence=$Bateau->getAgence();         
          $Bateau = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:Bateau')
                         ->findByIdJoinedToBateau($id);
                         $BateauTypeCabine=new BateauTypeCabine();

$BateauTypeCabine =   $entities = $em->getRepository('CroisiereBundle:BateauTypeCabine')
                ->findBy(array('Bateau' => $id));
             
          
          $TypeTag='CroisiereShow';
        return $this->render('CroisiereBundle:Croisiere:show.html.twig', array(
            'TypeTag'=>$TypeTag,
            'BateauTypeCabine'=> $BateauTypeCabine,
            'entityCroisiere'=>$Croisiere,
            'entity2'=>$Agence,
            'entityBateau'=>$Bateau,
            //'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing Croisiere entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Croisiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Croisiere entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('CroisiereBundle:Croisiere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Croisiere entity.
    *
    * @param Croisiere $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Croisiere $entity)
    {
        $form = $this->createForm(new CroisiereType(), $entity, array(
            'action' => $this->generateUrl('croisiere_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Croisiere entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Croisiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Croisiere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('croisiere_edit', array('id' => $id)));
        }

        return $this->render('CroisiereBundle:Croisiere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Croisiere entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:Croisiere')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Croisiere entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('croisiere'));
    }

    /**
     * Creates a form to delete a Croisiere entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('croisiere_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
