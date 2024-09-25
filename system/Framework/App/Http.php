<?php

/**
 * This file is part of the sxbrsky/aether.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Aether\Framework\App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Http implements AppInterface
{
    public function __construct(
        private Request $request,
        private Response $response,
    ) {
        $this->request = Request::createFromGlobals();
        $this->response = new Response();
    }

    public function run(): Response
    {
        return $this->response;
    }
}
