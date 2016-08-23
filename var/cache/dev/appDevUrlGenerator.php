<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => '_locale',    1 => 'code',    2 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',    '_locale' => 'en',  ),  2 =>   array (    'code' => '\\d+',    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dist_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Dist\\DistributorController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dist/home/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dist_create' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Dist\\DistributorController::newAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dist/home/new',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'distributor_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DistributorController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/distributor/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'distributor_new' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DistributorController::newAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/distributor/new',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'distributor_show' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DistributorController::showAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/distributor',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'distributor_edit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DistributorController::editAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/distributor',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'distributor_delete' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DistributorController::deleteAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/distributor',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_login' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_logout' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/web',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
