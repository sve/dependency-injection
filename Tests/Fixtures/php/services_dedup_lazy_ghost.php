<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class ProjectServiceContainer extends Container
{
    protected $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'bar' => 'getBarService',
            'foo' => 'getFooService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    protected function createProxy($class, \Closure $factory)
    {
        return $factory();
    }

    protected function hydrateProxy($proxy, $instance)
    {
        if (!\in_array(\get_class($instance), [\get_class($proxy), get_parent_class($proxy)], true)) {
            throw new LogicException(sprintf('Lazy service of type "%s" cannot be hydrated because its factory returned an unexpected instance of "%s". Try adding the "proxy" tag to the corresponding service definition with attribute "interface" set to "%1$s".', get_parent_class($proxy), get_debug_type($instance)));
        }

        return \Symfony\Component\VarExporter\Hydrator::hydrate($proxy, (array) $instance);
    }

    /**
     * Gets the public 'bar' shared service.
     *
     * @return \stdClass
     */
    protected function getBarService($lazyLoad = true)
    {
        // lazy factory for stdClass

        return $lazyLoad;
    }

    /**
     * Gets the public 'foo' shared service.
     *
     * @return \stdClass
     */
    protected function getFooService($lazyLoad = true)
    {
        // lazy factory for stdClass

        return $lazyLoad;
    }
}

// proxy code for stdClass
