<?php declare(strict_types=1);

namespace Easy\Error;

use Psr\Container\ContainerInterface;

class ErrorResponseGeneratorFactory
{
    public function __invoke(ContainerInterface $container): ErrorResponseGenerator
    {
        $config = $container->get('config');

        return new ErrorResponseGenerator($config['debug'] ?? false);
    }
}
