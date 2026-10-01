<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Auto-detect git staged files to document before committing
 */
class GitStagedInspector
{
    public function optimize(): bool
    {
        return true;
    }
}
