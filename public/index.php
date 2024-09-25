<?php

/*
 * This file is part of the sxbrsky/aether.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

try {
    require_once \dirname(__DIR__) . '/app/bootstrap.php';
} catch (\Exception $exc) {
    echo "<p>{$exc->getMessage()}" . PHP_EOL;
    echo "<p>{$exc->getTraceAsString()}</p>" . PHP_EOL;

    exit(1);
}

$kernel = new \Aether\Framework\AetherKernel();
$kernel->start(
    new \Aether\Framework\App\Http(
        \Symfony\Component\HttpFoundation\Request::createFromGlobals(),
        new \Symfony\Component\HttpFoundation\Response()
    )
);
