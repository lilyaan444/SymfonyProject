<?php

namespace Container9PqZBY5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_InMemory_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport.in_memory.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/InMemory/InMemoryTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/clock/src/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/ClockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/clock/Clock.php';

        return $container->privates['messenger.transport.in_memory.factory'] = new \Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory(($container->privates['clock'] ??= new \Symfony\Component\Clock\Clock()));
    }
}