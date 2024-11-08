<?php

namespace ContainerNl8InU5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControlleraddToCartService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a.Pczwd.App\Controller\ProductController::addToCart()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a.Pczwd.App\\Controller\\ProductController::addToCart()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'product' => ['privates', '.errored..service_locator.a.Pczwd.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.a.Pczwd": it needs an instance of "App\\Entity\\Product" but this type has been excluded in "config/services.yaml".'],
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
        ], [
            'product' => 'App\\Entity\\Product',
            'cartService' => 'App\\Service\\CartService',
        ]))->withContext('App\\Controller\\ProductController::addToCart()', $container);
    }
}