<?php

declare(strict_types = 1);

namespace JuniorFontenele\LaravelAppContext\Providers;

class TimestampProvider extends AbstractProvider
{
    public function getContext(): array
    {
        return [
            'timestamp' => now()->toIso8601String(),
        ];
    }
}
