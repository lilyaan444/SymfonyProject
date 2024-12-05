<?php

namespace Container9PqZBY5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BNcgp1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b_Ncgp1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b_Ncgp1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::index()', 'getCartControllerindexService', true],
            'App\\Controller\\CartController::add' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::add()', 'getCartControlleraddService', true],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::remove()', 'getCartControllerremoveService', true],
            'App\\Controller\\CartController::clear' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::clear()', 'getCartControllerclearService', true],
            'App\\Controller\\OrderController::create' => ['privates', '.service_locator.bRVoUCp.App\\Controller\\OrderController::create()', 'getOrderControllercreateService', true],
            'App\\Controller\\ProductController::addToCart' => ['privates', '.service_locator.a.Pczwd.App\\Controller\\ProductController::addToCart()', 'getProductControlleraddToCartService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.vL9hpCG.App\\Controller\\ProductController::index()', 'getProductControllerindexService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::index()', 'getCartControllerindexService', true],
            'App\\Controller\\CartController:add' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::add()', 'getCartControlleraddService', true],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::remove()', 'getCartControllerremoveService', true],
            'App\\Controller\\CartController:clear' => ['privates', '.service_locator.KQF_kLz.App\\Controller\\CartController::clear()', 'getCartControllerclearService', true],
            'App\\Controller\\OrderController:create' => ['privates', '.service_locator.bRVoUCp.App\\Controller\\OrderController::create()', 'getOrderControllercreateService', true],
            'App\\Controller\\ProductController:addToCart' => ['privates', '.service_locator.a.Pczwd.App\\Controller\\ProductController::addToCart()', 'getProductControlleraddToCartService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.vL9hpCG.App\\Controller\\ProductController::index()', 'getProductControllerindexService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CartController::add' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CartController::clear' => '?',
            'App\\Controller\\OrderController::create' => '?',
            'App\\Controller\\ProductController::addToCart' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CartController:add' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CartController:clear' => '?',
            'App\\Controller\\OrderController:create' => '?',
            'App\\Controller\\ProductController:addToCart' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
        ]);
    }
}