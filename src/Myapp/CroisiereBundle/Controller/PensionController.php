<?php

namespace Myapp\CroisiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Myapp\CroisiereBundle\Entity\Pension;
use Myapp\CroisiereBundle\Form\PensionType;

/**
 * Pension controller.
 *
 */
class PensionController extends Controller
{

    /**
     * Lists all Pension entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CroisiereBundle:Pension')->findAll();

        return $this->render('CroisiereBundle:Pension:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Pension entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pension();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pension_show', array('id' => $entity->getId())));
        }

        return $this->render('CroisiereBundle:Pension:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Pension entity.
    *
    * @param Pension $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Pension $entity)
    {
        $form = $this->createForm(new PensionType(), $entity, array(
            'action' => $this->generateUrl('pension_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pension entity.
     *
     */
    public function newAction()
    {
        $entity = new Pension();
        $form   = $this->createCreateForm($entity);

        return $this->render('CroisiereBundle:Pension:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pension entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Pension')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pension entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:Pension:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Pension entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Pension')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pension entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CroisiereBundle:Pension:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Pension entity.
    *
    * @param Pension $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pension $entity)
    {
        $form = $this->createForm(new PensionType(), $entity, array(
            'action' => $this->generateUrl('pension_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Pension entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Pension')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pension entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pension_edit', array('id' => $id)));
        }

        return $this->render('CroisiereBundle:Pension:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Pension entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:Pension')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pension entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pension'));
    }

    /**
     * Creates a form to delete a Pension entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pension_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
