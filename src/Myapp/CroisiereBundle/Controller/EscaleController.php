<?php

namespace Myapp\CroisiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Myapp\CroisiereBundle\Entity\Escale;
use Myapp\CroisiereBundle\Entity\Croisiere;
use Myapp\CroisiereBundle\Entity\CroisiereEscale;
use Myapp\CroisiereBundle\Entity\Agence;
use Myapp\CroisiereBundle\Entity\Bateau;

use Myapp\CroisiereBundle\Form\EscaleType;

/**
 * Escale controller.
 *
 */
class EscaleController extends Controller
{

    /**
     * Lists all Escale entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CroisiereBundle:Escale')->findAll();

        return $this->render('CroisiereBundle:Escale:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Escale entity.
     *
     */
    public function createAction(Request $request,$id)
    {
        $entity = new Escale();
        $form = $this->createCreateForm($entity,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            //$Croisier=new Croisiere();
            
            $em = $this->getDoctrine()->getManager();
            $Croisier=$em->getRepository('CroisiereBundle:Croisiere')->find($id);
            $entity->setCroisiere($Croisier);
          $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('escale_new', array('id' => $id)));
        }

        return $this->render('CroisiereBundle:Escale:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Escale entity.
    *
    * @param Escale $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Escale $entity,$id)
    {
        $form = $this->createForm(new EscaleType(), $entity, array(
            'action' => $this->generateUrl('escale_create', array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Escale entity.
     *
     */
    public function newAction($id)
    {
        $entity = new Escale();
        $form   = $this->createCreateForm($entity,$id);
        $Agence=new Agence();       
          $Croisiere=new Croisiere();
          $Bateau=new Bateau();
          $em = $this->getDoctrine()->getManager();
          $Croisiere=$em->getRepository('CroisiereBundle:Croisiere')->find($id);
          $Bateau = $Croisiere->getBateau();
          $Agence=$Bateau->getAgence();
         $Bateau = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:Bateau')
              ->findByIdJoinedToBateau($Bateau->getId());
          $Escale=new Escale();
          $Escale = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:Escale')
                         ->findByIdJoinedToCroisiere($id);
    
          
        return $this->render('CroisiereBundle:Escale:new.html.twig', array(
              'idCroisiere'=>$id,
               'entityEscale'=>$Escale, 
               'entityCroisiere'=>$Croisiere,
               'entityBateau'=>$Bateau,
                'entity2'=>$Agence,
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Escale entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
       // $entity = $em->getRepository('CroisiereBundle:Escale')->find($id);
         
        
        $Croisiere=$em->getRepository('CroisiereBundle:Croisiere')->find($id);
          $Bateau = $Croisiere->getBateau();
          $Agence=$Bateau->getAgence();
          $Bateau = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:Bateau')
              ->findByIdJoinedToBateau($Bateau->getId());
        $Escale=new Escale();
          $Escale = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CroisiereBundle:Escale')
                         ->findByIdJoinedToCroisiere($id);
          
          
          
          
          
        return $this->render('CroisiereBundle:Escale:show.html.twig', array(
           'idCroisiere'=>$id,
               'entityEscale'=>$Escale,
                'entityCroisiere'=>$Croisiere,
               'entityBateau'=>$Bateau,
                'entity2'=>$Agence,
          
            ));
    }

    /**
     * Displays a form to edit an existing Escale entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Escale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Escale entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:Escale:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Escale entity.
    *
    * @param Escale $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Escale $entity)
    {
        $form = $this->createForm(new EscaleType(), $entity, array(
            'action' => $this->generateUrl('escale_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Escale entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Escale')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Escale entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('escale_edit', array('id' => $id)));
        }

        return $this->render('CroisiereBundle:Escale:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Escale entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:Escale')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Escale entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('escale'));
    }

    /**
     * Creates a form to delete a Escale entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('escale_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
