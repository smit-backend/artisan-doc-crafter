<?php

declare(strict_types=1);

namespace SmitBackend\DocCrafter;

use SmitBackend\DocCrafter\Contracts\DocblockParserInterface;

/**
 * Class DocCrafterEngine
 *
 * @package SmitBackend\DocCrafter
 */
class DocCrafterEngine implements DocblockParserInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
