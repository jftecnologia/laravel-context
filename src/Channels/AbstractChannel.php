<?php

declare(strict_types = 1);

namespace JuniorFontenele\LaravelAppContext\Channels;

use JuniorFontenele\LaravelAppContext\Contracts\ContextChannel;

abstract class AbstractChannel implements ContextChannel
{
    public function __construct(protected array $config)
    {
    }
}
