<?php declare(strict_types=1);

/*
 * This file is part of the aether/aether.
 *
 * Copyright (C) 2024-2025 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

$packages = [];

foreach (\glob(\dirname(__DIR__) . '/packages/*/composer.json') as $package) {
    $composerData = \json_decode(\file_get_contents($package));

    if (!$composerData->name) {
        continue;
    }

    $packages[] = [
        'name' => $composerData->name,
        'repository_name' => \str_replace('/', '-', $composerData->name),
        'package_directory' => \pathinfo(\dirname($package), \PATHINFO_BASENAME),
    ];
}

$output = [];
$output['include'] = $packages;

echo \json_encode($output);
