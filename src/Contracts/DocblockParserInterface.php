<?php

declare(strict_types=1);

namespace SmitBackend\DocCrafter\Contracts;

/**
 * Interface DocblockParserInterface
 *
 * @package SmitBackend\DocCrafter
 */
interface DocblockParserInterface
{
    public function execute(array $payload = []): mixed;
}
