<?php

namespace Myapp\CroisiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Myapp\CroisiereBundle\Entity\PhotoTypeCabine;
use Myapp\CroisiereBundle\Form\PhotoTypeCabineType;

/**
 * PhotoTypeCabine controller.
 *
 * @Route("/phototypecabine")
 */
class PhotoTypeCabineController extends Controller
{

    /**
     * Lists all PhotoTypeCabine entities.
     *
     * @Route("/", name="phototypecabine")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        
          $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CroisiereBundle:PhotoTypeCabine')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new PhotoTypeCabine entity.
     *
     * @Route("/", name="phototypecabine_create")
     * @Method("POST")
     * @Template("CroisiereBundle:PhotoTypeCabine:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new PhotoTypeCabine();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->upload();
            $em->persist($entity);
            
            $em->flush();

            return $this->redirect($this->generateUrl('phototypecabine_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a PhotoTypeCabine entity.
    *
    * @param PhotoTypeCabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PhotoTypeCabine $entity)
    {
        $form = $this->createForm(new PhotoTypeCabineType(), $entity, array(
            'action' => $this->generateUrl('phototypecabine_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PhotoTypeCabine entity.
     *
     * @Route("/new", name="phototypecabine_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
         $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        
        
        
        $entity = new PhotoTypeCabine();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a PhotoTypeCabine entity.
     *
     * @Route("/{id}", name="phototypecabine_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:PhotoTypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PhotoTypeCabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing PhotoTypeCabine entity.
     *
     * @Route("/{id}/edit", name="phototypecabine_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:PhotoTypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PhotoTypeCabine entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a PhotoTypeCabine entity.
    *
    * @param PhotoTypeCabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PhotoTypeCabine $entity)
    {
        $form = $this->createForm(new PhotoTypeCabineType(), $entity, array(
            'action' => $this->generateUrl('phototypecabine_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PhotoTypeCabine entity.
     *
     * @Route("/{id}", name="phototypecabine_update")
     * @Method("PUT")
     * @Template("CroisiereBundle:PhotoTypeCabine:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:PhotoTypeCabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PhotoTypeCabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('phototypecabine_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a PhotoTypeCabine entity.
     *
     * @Route("/{id}", name="phototypecabine_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:PhotoTypeCabine')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PhotoTypeCabine entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('phototypecabine'));
    }

    /**
     * Creates a form to delete a PhotoTypeCabine entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('phototypecabine_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
