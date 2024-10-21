<?php declare(strict_types=1);

/*
 * This file is part of the aether/aether.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

$packages = \explode(PHP_EOL, \trim(\shell_exec("git diff HEAD --name-only packages/") ?? ''));
$modifiedPackages = [];

foreach($packages as $package) {
    $directory = \explode(DIRECTORY_SEPARATOR, $package)[1] ?? '';
    if (empty($directory)) {
        continue;
    }

    $composerFile = \dirname(__DIR__) . DIRECTORY_SEPARATOR . 'packages' . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . 'composer.json';
    $composerData = \json_decode(\file_get_contents($composerFile));

    if (!$composerData->name) {
        continue;
    }

    $modifiedPackages[$composerData->name] = [
        'name' => $composerData->name,
        'repository_name' => \str_replace('/', '-', $composerData->name),
        'package_directory' => $directory,
    ];
}

$output = [];
$output['include'] = $modifiedPackages;

echo \json_encode($output);
