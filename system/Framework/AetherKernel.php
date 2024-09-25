<?php

/**
 * This file is part of the sxbrsky/aether.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Aether\Framework;

use Aether\Framework\App\AppInterface;

class AetherKernel
{
    public function start(AppInterface $application): void
    {
        $response = $application->run();
        $response->send();
    }
}
