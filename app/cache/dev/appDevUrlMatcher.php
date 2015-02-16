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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/bootstrap_css')) {
                // _assetic_bootstrap_css
                if ($pathinfo === '/assetic/bootstrap_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                if (0 === strpos($pathinfo, '/assetic/bootstrap_css_bootstrap')) {
                    // _assetic_bootstrap_css_0
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                    }

                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/assetic/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/assetic/jquery_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/bootstrap_js')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/assetic/bootstrap_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                // _assetic_bootstrap_js_0
                if ($pathinfo === '/assetic/bootstrap_js_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular')) {
            // _assetic_bootstrap_glyphicons_ttf
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf',);
            }

            // _assetic_bootstrap_glyphicons_ttf_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf_0',);
            }

            // _assetic_bootstrap_glyphicons_eot
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot',);
            }

            // _assetic_bootstrap_glyphicons_eot_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot_0',);
            }

            // _assetic_bootstrap_glyphicons_svg
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg',);
            }

            // _assetic_bootstrap_glyphicons_svg_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg_0',);
            }

            // _assetic_bootstrap_glyphicons_woff
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff',);
            }

            // _assetic_bootstrap_glyphicons_woff_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/fddb9b6')) {
            // _assetic_fddb9b6
            if ($pathinfo === '/css/fddb9b6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fddb9b6',);
            }

            // _assetic_fddb9b6_0
            if ($pathinfo === '/css/fddb9b6_part_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fddb9b6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/a56fa94')) {
            // _assetic_a56fa94
            if ($pathinfo === '/js/a56fa94.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a56fa94',);
            }

            if (0 === strpos($pathinfo, '/js/a56fa94_part_')) {
                // _assetic_a56fa94_0
                if ($pathinfo === '/js/a56fa94_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a56fa94_0',);
                }

                // _assetic_a56fa94_1
                if ($pathinfo === '/js/a56fa94_part_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a56fa94_1',);
                }

            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/endereco')) {
            // endereco
            if (rtrim($pathinfo, '/') === '/endereco') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'endereco');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EnderecoController::indexAction',  '_route' => 'endereco',);
            }

            // endereco_show
            if (preg_match('#^/endereco/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EnderecoController::showAction',));
            }

            // endereco_new
            if ($pathinfo === '/endereco/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EnderecoController::newAction',  '_route' => 'endereco_new',);
            }

            // endereco_create
            if ($pathinfo === '/endereco/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_endereco_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EnderecoController::createAction',  '_route' => 'endereco_create',);
            }
            not_endereco_create:

            // endereco_edit
            if (preg_match('#^/endereco/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EnderecoController::editAction',));
            }

            // endereco_update
            if (preg_match('#^/endereco/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_endereco_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EnderecoController::updateAction',));
            }
            not_endereco_update:

            // endereco_delete
            if (preg_match('#^/endereco/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_endereco_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EnderecoController::deleteAction',));
            }
            not_endereco_delete:

        }

        if (0 === strpos($pathinfo, '/servico')) {
            // servico
            if (rtrim($pathinfo, '/') === '/servico') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'servico');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ServicoController::indexAction',  '_route' => 'servico',);
            }

            // servico_show
            if (preg_match('#^/servico/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servico_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ServicoController::showAction',));
            }

            // servico_new
            if ($pathinfo === '/servico/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ServicoController::newAction',  '_route' => 'servico_new',);
            }

            // servico_create
            if ($pathinfo === '/servico/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_servico_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ServicoController::createAction',  '_route' => 'servico_create',);
            }
            not_servico_create:

            // servico_edit
            if (preg_match('#^/servico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servico_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ServicoController::editAction',));
            }

            // servico_update
            if (preg_match('#^/servico/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_servico_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servico_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ServicoController::updateAction',));
            }
            not_servico_update:

            // servico_delete
            if (preg_match('#^/servico/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_servico_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servico_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ServicoController::deleteAction',));
            }
            not_servico_delete:

        }

        if (0 === strpos($pathinfo, '/item')) {
            // item
            if (rtrim($pathinfo, '/') === '/item') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'item');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ItemController::indexAction',  '_route' => 'item',);
            }

            // item_show
            if (preg_match('#^/item/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ItemController::showAction',));
            }

            // item_new
            if ($pathinfo === '/item/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ItemController::newAction',  '_route' => 'item_new',);
            }

            // item_create
            if ($pathinfo === '/item/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_item_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ItemController::createAction',  '_route' => 'item_create',);
            }
            not_item_create:

            // item_edit
            if (preg_match('#^/item/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ItemController::editAction',));
            }

            // item_update
            if (preg_match('#^/item/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_item_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ItemController::updateAction',));
            }
            not_item_update:

            // item_delete
            if (preg_match('#^/item/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_item_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\ItemController::deleteAction',));
            }
            not_item_delete:

        }

        if (0 === strpos($pathinfo, '/os')) {
            // os
            if (rtrim($pathinfo, '/') === '/os') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'os');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\OsController::indexAction',  '_route' => 'os',);
            }

            // os_show
            if (preg_match('#^/os/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'os_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\OsController::showAction',));
            }

            // os_new
            if ($pathinfo === '/os/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\OsController::newAction',  '_route' => 'os_new',);
            }

            // os_create
            if ($pathinfo === '/os/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_os_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\OsController::createAction',  '_route' => 'os_create',);
            }
            not_os_create:

            // os_edit
            if (preg_match('#^/os/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'os_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\OsController::editAction',));
            }

            // os_update
            if (preg_match('#^/os/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_os_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'os_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\OsController::updateAction',));
            }
            not_os_update:

            // os_delete
            if (preg_match('#^/os/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_os_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'os_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\OsController::deleteAction',));
            }
            not_os_delete:

        }

        if (0 === strpos($pathinfo, '/planoconta')) {
            // planoconta
            if (rtrim($pathinfo, '/') === '/planoconta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'planoconta');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PlanoContaController::indexAction',  '_route' => 'planoconta',);
            }

            // planoconta_show
            if (preg_match('#^/planoconta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planoconta_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PlanoContaController::showAction',));
            }

            // planoconta_new
            if ($pathinfo === '/planoconta/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PlanoContaController::newAction',  '_route' => 'planoconta_new',);
            }

            // planoconta_create
            if ($pathinfo === '/planoconta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planoconta_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PlanoContaController::createAction',  '_route' => 'planoconta_create',);
            }
            not_planoconta_create:

            // planoconta_edit
            if (preg_match('#^/planoconta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planoconta_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PlanoContaController::editAction',));
            }

            // planoconta_update
            if (preg_match('#^/planoconta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_planoconta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planoconta_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PlanoContaController::updateAction',));
            }
            not_planoconta_update:

            // planoconta_delete
            if (preg_match('#^/planoconta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_planoconta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planoconta_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PlanoContaController::deleteAction',));
            }
            not_planoconta_delete:

        }

        if (0 === strpos($pathinfo, '/lancamento')) {
            // lancamento
            if (rtrim($pathinfo, '/') === '/lancamento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lancamento');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\LancamentoController::indexAction',  '_route' => 'lancamento',);
            }

            // lancamento_show
            if (preg_match('#^/lancamento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lancamento_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\LancamentoController::showAction',));
            }

            // lancamento_new
            if ($pathinfo === '/lancamento/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\LancamentoController::newAction',  '_route' => 'lancamento_new',);
            }

            // lancamento_create
            if ($pathinfo === '/lancamento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_lancamento_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\LancamentoController::createAction',  '_route' => 'lancamento_create',);
            }
            not_lancamento_create:

            // lancamento_edit
            if (preg_match('#^/lancamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lancamento_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\LancamentoController::editAction',));
            }

            // lancamento_update
            if (preg_match('#^/lancamento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_lancamento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lancamento_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\LancamentoController::updateAction',));
            }
            not_lancamento_update:

            // lancamento_delete
            if (preg_match('#^/lancamento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_lancamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lancamento_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\LancamentoController::deleteAction',));
            }
            not_lancamento_delete:

        }

        if (0 === strpos($pathinfo, '/tipocobrancapagamento')) {
            // tipocobrancapagamento
            if (rtrim($pathinfo, '/') === '/tipocobrancapagamento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipocobrancapagamento');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\TipoCobrancaPagamentoController::indexAction',  '_route' => 'tipocobrancapagamento',);
            }

            // tipocobrancapagamento_show
            if (preg_match('#^/tipocobrancapagamento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocobrancapagamento_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\TipoCobrancaPagamentoController::showAction',));
            }

            // tipocobrancapagamento_new
            if ($pathinfo === '/tipocobrancapagamento/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\TipoCobrancaPagamentoController::newAction',  '_route' => 'tipocobrancapagamento_new',);
            }

            // tipocobrancapagamento_create
            if ($pathinfo === '/tipocobrancapagamento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipocobrancapagamento_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\TipoCobrancaPagamentoController::createAction',  '_route' => 'tipocobrancapagamento_create',);
            }
            not_tipocobrancapagamento_create:

            // tipocobrancapagamento_edit
            if (preg_match('#^/tipocobrancapagamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocobrancapagamento_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\TipoCobrancaPagamentoController::editAction',));
            }

            // tipocobrancapagamento_update
            if (preg_match('#^/tipocobrancapagamento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipocobrancapagamento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocobrancapagamento_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\TipoCobrancaPagamentoController::updateAction',));
            }
            not_tipocobrancapagamento_update:

            // tipocobrancapagamento_delete
            if (preg_match('#^/tipocobrancapagamento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipocobrancapagamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocobrancapagamento_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\TipoCobrancaPagamentoController::deleteAction',));
            }
            not_tipocobrancapagamento_delete:

        }

        if (0 === strpos($pathinfo, '/estado')) {
            // estado
            if (rtrim($pathinfo, '/') === '/estado') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estado');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EstadoController::indexAction',  '_route' => 'estado',);
            }

            // estado_show
            if (preg_match('#^/estado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EstadoController::showAction',));
            }

            // estado_new
            if ($pathinfo === '/estado/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EstadoController::newAction',  '_route' => 'estado_new',);
            }

            // estado_create
            if ($pathinfo === '/estado/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_estado_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EstadoController::createAction',  '_route' => 'estado_create',);
            }
            not_estado_create:

            // estado_edit
            if (preg_match('#^/estado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EstadoController::editAction',));
            }

            // estado_update
            if (preg_match('#^/estado/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_estado_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EstadoController::updateAction',));
            }
            not_estado_update:

            // estado_delete
            if (preg_match('#^/estado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_estado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\EstadoController::deleteAction',));
            }
            not_estado_delete:

        }

        if (0 === strpos($pathinfo, '/cidade')) {
            // cidade
            if (rtrim($pathinfo, '/') === '/cidade') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cidade');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\CidadeController::indexAction',  '_route' => 'cidade',);
            }

            // cidade_show
            if (preg_match('#^/cidade/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cidade_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\CidadeController::showAction',));
            }

            // cidade_new
            if ($pathinfo === '/cidade/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\CidadeController::newAction',  '_route' => 'cidade_new',);
            }

            // cidade_create
            if ($pathinfo === '/cidade/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cidade_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\CidadeController::createAction',  '_route' => 'cidade_create',);
            }
            not_cidade_create:

            // cidade_edit
            if (preg_match('#^/cidade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cidade_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\CidadeController::editAction',));
            }

            // cidade_update
            if (preg_match('#^/cidade/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cidade_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cidade_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\CidadeController::updateAction',));
            }
            not_cidade_update:

            // cidade_delete
            if (preg_match('#^/cidade/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cidade_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cidade_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\CidadeController::deleteAction',));
            }
            not_cidade_delete:

        }

        if (0 === strpos($pathinfo, '/pais')) {
            // pais
            if (rtrim($pathinfo, '/') === '/pais') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pais');
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PaisController::indexAction',  '_route' => 'pais',);
            }

            // pais_show
            if (preg_match('#^/pais/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_show')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PaisController::showAction',));
            }

            // pais_new
            if ($pathinfo === '/pais/new') {
                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PaisController::newAction',  '_route' => 'pais_new',);
            }

            // pais_create
            if ($pathinfo === '/pais/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pais_create;
                }

                return array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PaisController::createAction',  '_route' => 'pais_create',);
            }
            not_pais_create:

            // pais_edit
            if (preg_match('#^/pais/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PaisController::editAction',));
            }

            // pais_update
            if (preg_match('#^/pais/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pais_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_update')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PaisController::updateAction',));
            }
            not_pais_update:

            // pais_delete
            if (preg_match('#^/pais/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pais_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'AGS\\FinanceiroBundle\\Controller\\PaisController::deleteAction',));
            }
            not_pais_delete:

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
