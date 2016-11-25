<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/rest')) {
            if (0 === strpos($pathinfo, '/rest/produtos')) {
                // app_produto_findall
                if ($pathinfo === '/rest/produtos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_produto_findall;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProdutoController::findAll',  '_route' => 'app_produto_findall',);
                }
                not_app_produto_findall:

                // app_produto_find
                if (preg_match('#^/rest/produtos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_produto_find;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_produto_find')), array (  '_controller' => 'AppBundle\\Controller\\ProdutoController::find',));
                }
                not_app_produto_find:

                // app_produto_create
                if ($pathinfo === '/rest/produtos') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_produto_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProdutoController::create',  '_route' => 'app_produto_create',);
                }
                not_app_produto_create:

                // app_produto_update
                if (preg_match('#^/rest/produtos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_produto_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_produto_update')), array (  '_controller' => 'AppBundle\\Controller\\ProdutoController::update',));
                }
                not_app_produto_update:

                // app_produto_remove
                if (preg_match('#^/rest/produtos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_app_produto_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_produto_remove')), array (  '_controller' => 'AppBundle\\Controller\\ProdutoController::remove',));
                }
                not_app_produto_remove:

            }

            if (0 === strpos($pathinfo, '/rest/usuarios')) {
                // app_usuario_findall
                if ($pathinfo === '/rest/usuarios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_usuario_findall;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::findAll',  '_route' => 'app_usuario_findall',);
                }
                not_app_usuario_findall:

                // app_usuario_find
                if (preg_match('#^/rest/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_app_usuario_find;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_usuario_find')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::find',));
                }
                not_app_usuario_find:

                // app_usuario_create
                if ($pathinfo === '/rest/usuarios') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_app_usuario_create;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::create',  '_route' => 'app_usuario_create',);
                }
                not_app_usuario_create:

                // app_usuario_update
                if (preg_match('#^/rest/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_app_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_usuario_update')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::update',));
                }
                not_app_usuario_update:

                // app_usuario_remove
                if (preg_match('#^/rest/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_app_usuario_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_usuario_remove')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::remove',));
                }
                not_app_usuario_remove:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
