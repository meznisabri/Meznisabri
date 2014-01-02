<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // clt_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'clt_homepage');
            }

            return array (  '_controller' => 'Myapp\\CltBundle\\Controller\\DefaultController::indexAction',  '_route' => 'clt_homepage',);
        }

        // search_croisiere
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Myapp\\CltBundle\\Controller\\DefaultController::searchAction',  '_route' => 'search_croisiere',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/typecabine')) {
                // typecabine
                if (rtrim($pathinfo, '/') === '/admin/typecabine') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typecabine');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\TypeCabineController::indexAction',  '_route' => 'typecabine',);
                }

                // typecabine_show
                if (preg_match('#^/admin/typecabine/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecabine_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\TypeCabineController::showAction',));
                }

                // typecabine_new
                if (preg_match('#^/admin/typecabine/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecabine_new')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\TypeCabineController::newAction',));
                }

                // typecabine_create
                if (preg_match('#^/admin/typecabine/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_typecabine_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecabine_create')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\TypeCabineController::createAction',));
                }
                not_typecabine_create:

                // typecabine_edit
                if (preg_match('#^/admin/typecabine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecabine_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\TypeCabineController::editAction',));
                }

                // typecabine_update
                if (preg_match('#^/admin/typecabine/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_typecabine_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecabine_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\TypeCabineController::updateAction',));
                }
                not_typecabine_update:

                // typecabine_delete
                if (preg_match('#^/admin/typecabine/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_typecabine_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecabine_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\TypeCabineController::deleteAction',));
                }
                not_typecabine_delete:

            }

            if (0 === strpos($pathinfo, '/admin/imagecros')) {
                // imagecros
                if (rtrim($pathinfo, '/') === '/admin/imagecros') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'imagecros');
                    }

                    return array (  '_controller' => 'CroisiereBundle:imageCros:index',  '_route' => 'imagecros',);
                }

                // imagecros_show
                if (preg_match('#^/admin/imagecros/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagecros_show')), array (  '_controller' => 'CroisiereBundle:imageCros:show',));
                }

                // imagecros_new
                if ($pathinfo === '/admin/imagecros/new') {
                    return array (  '_controller' => 'CroisiereBundle:imageCros:new',  '_route' => 'imagecros_new',);
                }

                // imagecros_create
                if ($pathinfo === '/admin/imagecros/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_imagecros_create;
                    }

                    return array (  '_controller' => 'CroisiereBundle:imageCros:create',  '_route' => 'imagecros_create',);
                }
                not_imagecros_create:

                // imagecros_edit
                if (preg_match('#^/admin/imagecros/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagecros_edit')), array (  '_controller' => 'CroisiereBundle:imageCros:edit',));
                }

                // imagecros_update
                if (preg_match('#^/admin/imagecros/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_imagecros_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagecros_update')), array (  '_controller' => 'CroisiereBundle:imageCros:update',));
                }
                not_imagecros_update:

                // imagecros_delete
                if (preg_match('#^/admin/imagecros/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_imagecros_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imagecros_delete')), array (  '_controller' => 'CroisiereBundle:imageCros:delete',));
                }
                not_imagecros_delete:

            }

            if (0 === strpos($pathinfo, '/admin/bateau')) {
                if (0 === strpos($pathinfo, '/admin/bateau/admin')) {
                    // bateau
                    if (rtrim($pathinfo, '/') === '/admin/bateau/admin') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'bateau');
                        }

                        return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::indexAction',  '_route' => 'bateau',);
                    }

                    // bateau_show
                    if (preg_match('#^/admin/bateau/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateau_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::showAction',));
                    }

                    // bateau_new
                    if (preg_match('#^/admin/bateau/admin/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateau_new')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::newAction',));
                    }

                    // bateau_create
                    if ($pathinfo === '/admin/bateau/admin/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bateau_create;
                        }

                        return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::createAction',  '_route' => 'bateau_create',);
                    }
                    not_bateau_create:

                    // bateau_edit
                    if (preg_match('#^/admin/bateau/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateau_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::editAction',));
                    }

                    // bateau_update
                    if (preg_match('#^/admin/bateau/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_bateau_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateau_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::updateAction',));
                    }
                    not_bateau_update:

                    // bateau_delete
                    if (preg_match('#^/admin/bateau/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_bateau_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateau_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::deleteAction',));
                    }
                    not_bateau_delete:

                    // bateauc_create
                    if (preg_match('#^/admin/bateau/admin/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bateauc_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateauc_create')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauController::createBateauAction',));
                    }
                    not_bateauc_create:

                }

                if (0 === strpos($pathinfo, '/admin/bateautypecabine')) {
                    // bateautypecabine
                    if (rtrim($pathinfo, '/') === '/admin/bateautypecabine') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'bateautypecabine');
                        }

                        return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauTypeCabineController::indexAction',  '_route' => 'bateautypecabine',);
                    }

                    // bateautypecabine_show
                    if (preg_match('#^/admin/bateautypecabine/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateautypecabine_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauTypeCabineController::showAction',));
                    }

                    // bateautypecabine_new
                    if (preg_match('#^/admin/bateautypecabine/(?P<id>[^/]++)/(?P<idagence>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateautypecabine_new')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauTypeCabineController::newAction',));
                    }

                    // bateautypecabine_create
                    if (preg_match('#^/admin/bateautypecabine/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_bateautypecabine_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateautypecabine_create')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauTypeCabineController::createAction',));
                    }
                    not_bateautypecabine_create:

                    // bateautypecabine_edit
                    if (preg_match('#^/admin/bateautypecabine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateautypecabine_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauTypeCabineController::editAction',));
                    }

                    // bateautypecabine_update
                    if (preg_match('#^/admin/bateautypecabine/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_bateautypecabine_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateautypecabine_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauTypeCabineController::updateAction',));
                    }
                    not_bateautypecabine_update:

                    // bateautypecabine_delete
                    if (preg_match('#^/admin/bateautypecabine/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_bateautypecabine_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'bateautypecabine_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\BateauTypeCabineController::deleteAction',));
                    }
                    not_bateautypecabine_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/croisiere')) {
                // croisiere
                if (rtrim($pathinfo, '/') === '/admin/croisiere') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'croisiere');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CroisiereController::indexAction',  '_route' => 'croisiere',);
                }

                // croisiere_show
                if (preg_match('#^/admin/croisiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CroisiereController::showAction',));
                }

                // croisiere_new
                if (preg_match('#^/admin/croisiere/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_new')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CroisiereController::newAction',));
                }

                // croisiere_create
                if (preg_match('#^/admin/croisiere/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_croisiere_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_create')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CroisiereController::createAction',));
                }
                not_croisiere_create:

                // croisiere_edit
                if (preg_match('#^/admin/croisiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CroisiereController::editAction',));
                }

                // croisiere_update
                if (preg_match('#^/admin/croisiere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_croisiere_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CroisiereController::updateAction',));
                }
                not_croisiere_update:

                // croisiere_delete
                if (preg_match('#^/admin/croisiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_croisiere_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'croisiere_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CroisiereController::deleteAction',));
                }
                not_croisiere_delete:

            }

            if (0 === strpos($pathinfo, '/admin/pension')) {
                // pension
                if (rtrim($pathinfo, '/') === '/admin/pension') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pension');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PensionController::indexAction',  '_route' => 'pension',);
                }

                // pension_show
                if (preg_match('#^/admin/pension/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pension_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PensionController::showAction',));
                }

                // pension_new
                if ($pathinfo === '/admin/pension/new') {
                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PensionController::newAction',  '_route' => 'pension_new',);
                }

                // pension_create
                if ($pathinfo === '/admin/pension/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pension_create;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PensionController::createAction',  '_route' => 'pension_create',);
                }
                not_pension_create:

                // pension_edit
                if (preg_match('#^/admin/pension/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pension_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PensionController::editAction',));
                }

                // pension_update
                if (preg_match('#^/admin/pension/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pension_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pension_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PensionController::updateAction',));
                }
                not_pension_update:

                // pension_delete
                if (preg_match('#^/admin/pension/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_pension_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pension_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PensionController::deleteAction',));
                }
                not_pension_delete:

            }

            if (0 === strpos($pathinfo, '/admin/escale')) {
                // escale
                if (rtrim($pathinfo, '/') === '/admin/escale') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'escale');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\EscaleController::indexAction',  '_route' => 'escale',);
                }

                // escale_show
                if (preg_match('#^/admin/escale/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'escale_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\EscaleController::showAction',));
                }

                // escale_new
                if (preg_match('#^/admin/escale/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'escale_new')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\EscaleController::newAction',));
                }

                // escale_create
                if (preg_match('#^/admin/escale/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_escale_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'escale_create')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\EscaleController::createAction',));
                }
                not_escale_create:

                // escale_edit
                if (preg_match('#^/admin/escale/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'escale_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\EscaleController::editAction',));
                }

                // escale_update
                if (preg_match('#^/admin/escale/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_escale_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'escale_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\EscaleController::updateAction',));
                }
                not_escale_update:

                // escale_delete
                if (preg_match('#^/admin/escale/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_escale_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'escale_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\EscaleController::deleteAction',));
                }
                not_escale_delete:

            }

            if (0 === strpos($pathinfo, '/admin/assurance')) {
                // assurance
                if (rtrim($pathinfo, '/') === '/admin/assurance') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'assurance');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AssuranceController::indexAction',  '_route' => 'assurance',);
                }

                // assurance_show
                if (preg_match('#^/admin/assurance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'assurance_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AssuranceController::showAction',));
                }

                // assurance_new
                if ($pathinfo === '/admin/assurance/new') {
                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AssuranceController::newAction',  '_route' => 'assurance_new',);
                }

                // assurance_create
                if ($pathinfo === '/admin/assurance/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_assurance_create;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AssuranceController::createAction',  '_route' => 'assurance_create',);
                }
                not_assurance_create:

                // assurance_edit
                if (preg_match('#^/admin/assurance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'assurance_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AssuranceController::editAction',));
                }

                // assurance_update
                if (preg_match('#^/admin/assurance/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_assurance_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'assurance_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AssuranceController::updateAction',));
                }
                not_assurance_update:

                // assurance_delete
                if (preg_match('#^/admin/assurance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_assurance_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'assurance_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AssuranceController::deleteAction',));
                }
                not_assurance_delete:

            }

            // croisiere_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'croisiere_homepage');
                }

                return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\DefaultController::indexAction',  '_route' => 'croisiere_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/agence')) {
                // agence
                if (rtrim($pathinfo, '/') === '/admin/agence') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_agence;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'agence');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AgenceController::indexAction',  '_route' => 'agence',);
                }
                not_agence:

                // agence_create
                if ($pathinfo === '/admin/agence/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_agence_create;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AgenceController::createAction',  '_route' => 'agence_create',);
                }
                not_agence_create:

                // agence_new
                if ($pathinfo === '/admin/agence/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_agence_new;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AgenceController::newAction',  '_route' => 'agence_new',);
                }
                not_agence_new:

                // agence_show
                if (preg_match('#^/admin/agence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_agence_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AgenceController::showAction',));
                }
                not_agence_show:

                // agence_edit
                if (preg_match('#^/admin/agence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_agence_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AgenceController::editAction',));
                }
                not_agence_edit:

                // agence_update
                if (preg_match('#^/admin/agence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_agence_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AgenceController::updateAction',));
                }
                not_agence_update:

                // agence_delete
                if (preg_match('#^/admin/agence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_agence_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\AgenceController::deleteAction',));
                }
                not_agence_delete:

            }

            if (0 === strpos($pathinfo, '/admin/cabine')) {
                // cabine
                if (rtrim($pathinfo, '/') === '/admin/cabine') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cabine;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cabine');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CabineController::indexAction',  '_route' => 'cabine',);
                }
                not_cabine:

                // cabine_create
                if ($pathinfo === '/admin/cabine/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cabine_create;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CabineController::createAction',  '_route' => 'cabine_create',);
                }
                not_cabine_create:

                // cabine_new
                if ($pathinfo === '/admin/cabine/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cabine_new;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CabineController::newAction',  '_route' => 'cabine_new',);
                }
                not_cabine_new:

                // cabine_show
                if (preg_match('#^/admin/cabine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cabine_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cabine_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CabineController::showAction',));
                }
                not_cabine_show:

                // cabine_edit
                if (preg_match('#^/admin/cabine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cabine_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cabine_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CabineController::editAction',));
                }
                not_cabine_edit:

                // cabine_update
                if (preg_match('#^/admin/cabine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_cabine_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cabine_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CabineController::updateAction',));
                }
                not_cabine_update:

                // cabine_delete
                if (preg_match('#^/admin/cabine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cabine_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cabine_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\CabineController::deleteAction',));
                }
                not_cabine_delete:

            }

            if (0 === strpos($pathinfo, '/admin/phototypecabine')) {
                // phototypecabine
                if (rtrim($pathinfo, '/') === '/admin/phototypecabine') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phototypecabine;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'phototypecabine');
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PhotoTypeCabineController::indexAction',  '_route' => 'phototypecabine',);
                }
                not_phototypecabine:

                // phototypecabine_create
                if ($pathinfo === '/admin/phototypecabine/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_phototypecabine_create;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PhotoTypeCabineController::createAction',  '_route' => 'phototypecabine_create',);
                }
                not_phototypecabine_create:

                // phototypecabine_new
                if ($pathinfo === '/admin/phototypecabine/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phototypecabine_new;
                    }

                    return array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PhotoTypeCabineController::newAction',  '_route' => 'phototypecabine_new',);
                }
                not_phototypecabine_new:

                // phototypecabine_show
                if (preg_match('#^/admin/phototypecabine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phototypecabine_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phototypecabine_show')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PhotoTypeCabineController::showAction',));
                }
                not_phototypecabine_show:

                // phototypecabine_edit
                if (preg_match('#^/admin/phototypecabine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phototypecabine_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phototypecabine_edit')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PhotoTypeCabineController::editAction',));
                }
                not_phototypecabine_edit:

                // phototypecabine_update
                if (preg_match('#^/admin/phototypecabine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_phototypecabine_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phototypecabine_update')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PhotoTypeCabineController::updateAction',));
                }
                not_phototypecabine_update:

                // phototypecabine_delete
                if (preg_match('#^/admin/phototypecabine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_phototypecabine_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phototypecabine_delete')), array (  '_controller' => 'Myapp\\CroisiereBundle\\Controller\\PhotoTypeCabineController::deleteAction',));
                }
                not_phototypecabine_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
