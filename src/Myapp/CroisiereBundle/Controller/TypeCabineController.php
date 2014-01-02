<?php

namespace Myapp\CroisiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\CroisiereBundle\Entity\Cabine;

use Myapp\CroisiereBundle\Entity\TypeCabine;
use Myapp\CroisiereBundle\Form\TypeCabineType;

/**
 * TypeCabine controller.
 *
 */
class TypeCabineController extends Controller
{

    /**
     * Lists all TypeCabine entities.
     *
     */
    public function indexAction()
    {
        
        
          $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
    
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CroisiereBundle:TypeCabine')->findAll();

        return $this->render('CroisiereBundle:TypeCabine:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TypeCabine entity.
     *
     */
    public function createAction(Request $request,$id)
    {
        $entity = new TypeCabine();
        $form = $this->createCreateForm($entity,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
             $Cabine= new Cabine();  
        $Cabine = $em->getRepository('CroisiereBundle:Cabine')->find($id);
        $entity->setCabine($Cabine);
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typecabine_show', array('id' => $entity->getId())));
        }

        return $this->render('CroisiereBundle:TypeCabine:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TypeCabine entity.
    *
    * @param TypeCabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TypeCabine $entity,$id)
    {
        $form = $this->createForm(new TypeCabineType(), $entity, array(
            'action' => $this->generateUrl('typecabine_create', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TypeCabine entity.
     *
     */
    public function newAction($id)
    {
         $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        
        
        
        $entity = new TypeCabine();
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('CroisiereBundle:TypeCabine:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeCabine entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:TypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeCabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:TypeCabine:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TypeCabine entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:TypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeCabine entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:TypeCabine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TypeCabine entity.
    *
    * @param TypeCabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TypeCabine $entity)
    {
        $form = $this->createForm(new TypeCabineType(), $entity, array(
            'action' => $this->generateUrl('typecabine_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TypeCabine entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:TypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeCabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('typecabine_edit', array('id' => $id)));
        }

        return $this->render('CroisiereBundle:TypeCabine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TypeCabine entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:TypeCabine')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TypeCabine entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typecabine'));
    }

    /**
     * Creates a form to delete a TypeCabine entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typecabine_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
