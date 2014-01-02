<?php

namespace Myapp\CroisiereBundle\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
          $securityContext = $this->container->get('security.context');
    if (!$securityContext->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException('Get outta here!');
    }
        return $this->render('CroisiereBundle:Default:index.html.twig', array());
    }
}
