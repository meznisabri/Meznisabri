<?php

namespace Myapp\CroisiereBundle\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Myapp\CroisiereBundle\Entity\Agence;
use Myapp\CroisiereBundle\Entity\Bateau;
use Myapp\CroisiereBundle\Entity\Croisiere;
use Myapp\CroisiereBundle\Form\AgenceType;

/**
 * Agence controller.
 *
 * @Route("/agence")
 */
class AgenceController extends Controller
{

    /**
     * Lists all Agence entities.
     *
     * @Route("/", name="agence")
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

        $entities = $em->getRepository('CroisiereBundle:Agence')->findAllAgence();
        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Agence entity.
     *
     * @Route("/", name="agence_create")
     * @Method("POST")
     * @Template("CroisiereBundle:Agence:new.html.twig")
     */
    public function createAction(Request $request)
    {
     
        
        $entity = new Agence();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('bateau_new', array('id' => $entity->getId())));
        }
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Agence entity.
    *
    * @param Agence $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Agence $entity)
    {
        $form = $this->createForm(new AgenceType(), $entity, array(
            'action' => $this->generateUrl('agence_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Agence entity.
     *
     * @Route("/new", name="agence_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
         $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        $entity = new Agence();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Agence entity.
     *
     * @Route("/{id}", name="agence_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
         $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CroisiereBundle:Agence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agence entity.');
        }
$entityAgence= new Agence();
            $em = $this->getDoctrine()->getManager();
            $entityAgence = $em->getRepository('CroisiereBundle:Agence')->find($id);

    
          //$em = $this->getDoctrine()->getManager();
        // $entityBateau = $em->getRepository('CroisiereBundle:Bateau')->;
            $entityBateau= new Bateau();
            $entityBateau = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('CroisiereBundle:Bateau')
                                ->findByIdJoinedToAgence($id);
            $Croisiere=new Croisiere();
        
           // $Croisiere=$em->getRepository('CroisiereBundle:Croisiere')->find($id);
        //$deleteForm = $this->createDeleteForm($id);
        return array(
             'entity2'=>$entityAgence,
              'entityBateau'=>$entityBateau,
            'entity'      => $entity,
         //   'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Agence entity.
     *
     * @Route("/{id}/edit", name="agence_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Agence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agence entity.');
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
    * Creates a form to edit a Agence entity.
    *
    * @param Agence $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Agence $entity)
    {
        $form = $this->createForm(new AgenceType(), $entity, array(
            'action' => $this->generateUrl('agence_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Agence entity.
     *
     * @Route("/{id}", name="agence_update")
     * @Method("PUT")
     * @Template("CroisiereBundle:Agence:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CroisiereBundle:Agence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('agence_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Agence entity.
     *
     * @Route("/{id}", name="agence_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CroisiereBundle:Agence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Agence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agence'));
    }

    /**
     * Creates a form to delete a Agence entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agence_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
