<?php declare(strict_types=1);

namespace Easy\Error;

use Mezzio\Middleware\ErrorResponseGenerator;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    private function getDependencies(): array
    {
        return [
            'factories' => [
                ErrorResponseGenerator::class => ErrorResponseGeneratorFactory::class,
            ],
        ];
    }
}
