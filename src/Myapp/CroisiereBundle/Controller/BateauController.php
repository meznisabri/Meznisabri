<?php

namespace Myapp\CroisiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\CroisiereBundle\Entity\Agence;
use Myapp\CroisiereBundle\Entity\Bateau;
use Myapp\CroisiereBundle\Form\BateauType;
use Myapp\CroisiereBundle\Entity\TypeCabine;
use Myapp\CroisiereBundle\Entity\Bateau_TypeCabine;
/**
 * Bateau controller.
 *
 */
class BateauController extends Controller
{
    /**
     * Lists all Bateau entities.
     *
     */
    public function indexAction()
    {
        
             $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        
    }
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CroisiereBundle:Bateau')->findAll();
        return $this->render('CroisiereBundle:Bateau:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Bateau entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Bateau();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $typecabine->getId();
            $em->persist($entity);
            $em->flush();
           return $this->redirect($this->generateUrl('bateau_show', array('id' => $entity->getId())));
       }

        return $this->render('CroisiereBundle:Bateau:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'form_type_cabine'=>$form_type_cabine->createView(),
        ));
    }

    /**
    * Creates a form to create a Bateau entity.
    *
    * @param Bateau $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Bateau $entity)
    {
        $form = $this->createForm(new BateauType(), $entity, array(
            'action' => $this->generateUrl('bateau_create'),
            'method' => 'POST',
        ));
        


        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
       /**
    * Creates a form to create a Bateau entity.
    *
    * @param Bateau $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
      private function createCreateFormBateau(Bateau $entity,$id)
    {
        $form = $this->createForm(new BateauType(), $entity, array(
            'action' => $this->generateUrl('bateauc_create', array('id' => $id)),
            'method' => 'POST',
        )) ;
        
        /*
     $form->add('TypeCabine','entity', array(
            'class' => 'Myapp\CroisiereBundle\Entity\TypeCabine',
            'property' => 'nature',
            'multiple' => false,
            'required' => false
            ));
        */
       $form->add('submit', 'submit', array('label' => 'Create'));
       
        return $form;
      
    }
     /**
     * Creates a new Bateau entity.
     *
     */
    
        public function createBateauAction(Request $request,$id)
    { 
        
    
        
        $entity = new Bateau();
        $form = $this->createCreateFormBateau($entity,$id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
          $agence= new agence();  
        $agence = $em->getRepository('CroisiereBundle:Agence')->find($id);
        $entity->setAgence($agence);
      //  $typeCabine=new TypeCabine();
       // $typeCabine= $em->getRepository('CroisiereBundle:TypeCabine')->find(2);
        //$entity->addTypeCabine($typeCabine);    
        $em->persist($entity);
            $em->flush();
//return $this->redirect($this->generateUrl('typecabine_new', array('id' => $entity->getId())));
 
return $this->redirect($this->generateUrl('bateautypecabine_new', array('idagence'=>$id,'id' => $entity->getId())));
        }
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),

        );
    }

    /**
     * Displays a form to create a new Bateau entity.
     *
     */
    public function newAction(Request $request,$id)
    {
               $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
  
    }
        $entityAgence= new Agence();
          $em = $this->getDoctrine()->getManager();
         $entityAgence = $em->getRepository('CroisiereBundle:Agence')->find($id);
       

       
        $entity = new Bateau();
        $form   = $this->createCreateFormBateau($entity,$id);
       return $this->render('CroisiereBundle:Bateau:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
           'entity2'=>$entityAgence,
        ));
    }

    /**
     * Finds and displays a Bateau entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Bateau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bateau entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:Bateau:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Bateau entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Bateau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bateau entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:Bateau:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Bateau entity.
    *
    * @param Bateau $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bateau $entity)
    {
        $form = $this->createForm(new BateauType(), $entity, array(
            'action' => $this->generateUrl('bateau_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Bateau entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Bateau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bateau entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bateau_edit', array('id' => $id)));
        }

        return $this->render('CroisiereBundle:Bateau:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Bateau entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:Bateau')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bateau entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bateau'));
    }

    /**
     * Creates a form to delete a Bateau entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bateau_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
