<?php

declare(strict_types = 1);

namespace JuniorFontenele\LaravelAppContext\Providers;

use JuniorFontenele\LaravelAppContext\Contracts\ContextProvider;

abstract class AbstractProvider implements ContextProvider
{
    public function shouldRun(): bool
    {
        return true;
    }
}
