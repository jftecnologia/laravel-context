<?php

declare(strict_types = 1);

namespace JuniorFontenele\LaravelAppContext\Channels;

use Illuminate\Support\Facades\Log;

class LogChannel extends AbstractChannel
{
    public function isEnabled(): bool
    {
        return $this->config['log']['enabled'] ?? false;
    }

    public function send(array $context): void
    {
        Log::shareContext($context);
    }
}
