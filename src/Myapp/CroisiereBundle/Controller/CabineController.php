<?php

namespace Myapp\CroisiereBundle\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Myapp\CroisiereBundle\Entity\Cabine;
use Myapp\CroisiereBundle\Form\CabineType;

/**
 * Cabine controller.
 *
 * @Route("/cabine")
 */
class CabineController extends Controller
{

    /**
     * Lists all Cabine entities.
     *
     * @Route("/", name="cabine")
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

        $entities = $em->getRepository('CroisiereBundle:Cabine')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Cabine entity.
     *
     * @Route("/", name="cabine_create")
     * @Method("POST")
     * @Template("CroisiereBundle:Cabine:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Cabine();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typecabine_new', array('id' => $entity->getId())));
        
            
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Cabine entity.
    *
    * @param Cabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Cabine $entity)
    {
        $form = $this->createForm(new CabineType(), $entity, array(
            'action' => $this->generateUrl('cabine_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cabine entity.
     *
     * @Route("/new", name="cabine_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
         $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        $entity = new Cabine();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Cabine entity.
     *
     * @Route("/{id}", name="cabine_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CroisiereBundle:Cabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cabine entity.
     *
     * @Route("/{id}/edit", name="cabine_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Cabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cabine entity.');
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
    * Creates a form to edit a Cabine entity.
    *
    * @param Cabine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cabine $entity)
    {
        $form = $this->createForm(new CabineType(), $entity, array(
            'action' => $this->generateUrl('cabine_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cabine entity.
     *
     * @Route("/{id}", name="cabine_update")
     * @Method("PUT")
     * @Template("CroisiereBundle:Cabine:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Cabine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cabine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cabine_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Cabine entity.
     *
     * @Route("/{id}", name="cabine_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:Cabine')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cabine entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cabine'));
    }

    /**
     * Creates a form to delete a Cabine entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cabine_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    

 
}
