<?php

namespace Container9PqZBY5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerclearService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KQF_kLz.App\Controller\CartController::clear()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KQF_kLz.App\\Controller\\CartController::clear()'] = ($container->privates['.service_locator.KQF_kLz'] ?? $container->load('get_ServiceLocator_KQFKLzService'))->withContext('App\\Controller\\CartController::clear()', $container);
    }
}
