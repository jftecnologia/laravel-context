<?php

declare(strict_types = 1);

namespace JuniorFontenele\LaravelAppContext\Contracts;

interface ContextProvider
{
    /**
     * Returns an array with context information
     */
    public function getContext(): array;

    /**
     * Indicates if the provider should run
     */
    public function shouldRun(): bool;
}
