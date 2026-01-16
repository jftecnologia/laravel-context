<?php

declare(strict_types = 1);

namespace JuniorFontenele\LaravelAppContext\Contracts;

interface ContextChannel
{
    /**
     * Send the context to the channel
     */
    public function send(array $context): void;

    /**
     * Indicates if the channel is enabled
     */
    public function isEnabled(): bool;
}
