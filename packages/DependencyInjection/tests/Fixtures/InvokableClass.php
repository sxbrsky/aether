<?php

/*
 * This file is part of the aether/aether.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Aether\Tests\DependencyInjection\Fixtures;

class InvokableClass
{
    public function __invoke(string $name): string
    {
        return $name;
    }

    public function hello(string $name): string
    {
        return "Hello, $name";
    }
}