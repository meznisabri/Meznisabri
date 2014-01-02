<?php

namespace Myapp\CroisiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\CroisiereBundle\Entity\Bateau;
use Myapp\CroisiereBundle\Entity\Agence;

use Myapp\CroisiereBundle\Entity\TypeCabine;
use Myapp\CroisiereBundle\Entity\PhotoTypeCabine;

use Myapp\CroisiereBundle\Entity\BateauTypeCabine;

use Myapp\CroisiereBundle\Form\PhotoTypeCabineType;

use Myapp\CroisiereBundle\Form\BateauTypeCabineType;
use Myapp\CroisiereBundle\Form\TypeCabineType;

/**
 * BateauTypeCabine controller.
 *
 */
class BateauTypeCabineController extends Controller
{

    /**
     * Lists all BateauTypeCabine entities.
     *
     */
    public function indexAction()
    {
          $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CroisiereBundle:BateauTypeCabine')
                ->findBy(array('TypeCabine' => '2'));

        return $this->render('CroisiereBundle:BateauTypeCabine:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new BateauTypeCabine entity.
     *
     */
    public function createAction(Request $request,$id)
    {
        $entity = new BateauTypeCabine();
        $form = $this->createCreateForm($entity,$id);
        $entity2 = new TypeCabine();
        $form2 = $this->createCreateTypeCabineForm($entity2);
        $photo= new PhotoTypeCabine();
        $form3= $this->createCreatePhotoTypeCabineForm($photo);
        $form->handleRequest($request);
        $form2->handleRequest($request);
        $form3->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em = $this->getDoctrine()->getManager();
            $Bateau= new Bateau();  
            $Bateau = $em->getRepository('CroisiereBundle:Bateau')->find($id);
            $entity->setBateau($Bateau);
            $em->persist($entity2);
            $entity->setTypeCabine($entity2);
            $em->persist($entity);
            $photo->setTypeCabine($entity2);
            $em->persist($photo);
            $em->flush();           
            return $this->redirect($this->generateUrl('croisiere_new', array('id' => $Bateau->getId())));
        }
        return $this->render('CroisiereBundle:BateauTypeCabine:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a BateauTypeCabine entity.
    *
    * @param BateauTypeCabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(BateauTypeCabine $entity,$id)
    {
        $form = $this->createForm(new BateauTypeCabineType(), $entity, array(
            'action' => $this->generateUrl('bateautypecabine_create', array('id' => $id)),
            'method' => 'POST',
        ));
               
     /* $form->add('TypeCabine','entity', array(
            'class' => 'Myapp\CroisiereBundle\Entity\TypeCabine',
            'property' => 'nature',
            'multiple' => false,
            'required' => false
            ));
       */
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
    private function createCreateTypeCabineForm(TypeCabine $entity)
    {
        $form2 = $this->createForm(new TypeCabineType(), $entity, array(
            'method' => 'POST',
        ));
       $form2->add('Cabine','entity', array(
            'class' => 'Myapp\CroisiereBundle\Entity\Cabine',
            'property' => 'nomCabine',
            'multiple' => false,
            'required' => false
            ));
        $form2->add('submit', 'submit', array('label' => 'Create'));

        return $form2;
    }
   private function createCreatePhotoTypeCabineForm(PhotoTypeCabine $entity)
    {
        $form3 = $this->createForm(new PhotoTypeCabineType(), $entity, array(
            'method' => 'POST',
        ));
     
        $form3->add('submit', 'submit', array('label' => 'Create'));

        return $form3;
    }
    /**
     * Displays a form to create a new BateauTypeCabine entity.
     *
     */
    public function newAction($id,$idagence)
    {
         $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        
            $entityAgence= new Agence();
            $em = $this->getDoctrine()->getManager();
            $entityAgence = $em->getRepository('CroisiereBundle:Agence')->find($idagence);

    
          //$em = $this->getDoctrine()->getManager();
        // $entityBateau = $em->getRepository('CroisiereBundle:Bateau')->;
            $entityBateau= new Bateau();
            $entityBateau = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('CroisiereBundle:Bateau')
                                ->findByIdJoinedToAgence($idagence);

        
      
      
        $entity = new BateauTypeCabine();
        $form   = $this->createCreateForm($entity,$id);
        $entity2= new TypeCabine();
        $form2   = $this->createCreateTypeCabineForm($entity2);
         $entity3= new PhotoTypeCabine();
         $form3  = $this-> createCreatePhotoTypeCabineForm($entity3);
         
         
         
         
        return $this->render('CroisiereBundle:BateauTypeCabine:new.html.twig', array(
              'entity2'=>$entityAgence,
              'entityBateau'=>$entityBateau,
            
            'entity' => $entity,
            'form'   => $form->createView(),
            'form2'   => $form2->createView(),
            'form3'   => $form3->createView(),
        ));
    }

    /**
     * Finds and displays a BateauTypeCabine entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:BateauTypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BateauTypeCabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:BateauTypeCabine:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing BateauTypeCabine entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:BateauTypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BateauTypeCabine entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:BateauTypeCabine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a BateauTypeCabine entity.
    *
    * @param BateauTypeCabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BateauTypeCabine $entity)
    {
        $form = $this->createForm(new BateauTypeCabineType(), $entity, array(
            'action' => $this->generateUrl('bateautypecabine_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BateauTypeCabine entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:BateauTypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BateauTypeCabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bateautypecabine_edit', array('id' => $id)));
        }

        return $this->render('CroisiereBundle:BateauTypeCabine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a BateauTypeCabine entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:BateauTypeCabine')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BateauTypeCabine entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bateautypecabine'));
    }

    /**
     * Creates a form to delete a BateauTypeCabine entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bateautypecabine_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
