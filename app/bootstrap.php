<?php

/*
 * This file is part of the sxbrsky/aether.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

\error_reporting(\E_STRICT | \E_ALL);

if (!\defined('PHP_VERSION_ID') || \PHP_VERSION_ID < 80210) {
    echo \PHP_SAPI === 'cli'
        ? "Unsupported PHP Version, spark supports PHP 8.2.1 or later."
        : "<p>Unsupported PHP Version, aether supports PHP 8.2.1 or later.</p>";

    \http_response_code(503);
    exit(1);
}

if (\PHP_SAPI !== 'cli') {
    \ini_set('session.use_cookies', '1');
    \ini_set('session.use_only_cookies', '1');
    \ini_set('session.use_trans_sid', '0');
    \ini_set('session.cache_limiter', '');
    \ini_set('session.cookie_httponly', '1');
}

\setlocale(\LC_ALL, 'C');

\mb_internal_encoding('UTF-8');
\mb_language('uni');

\date_default_timezone_set('UTC');

require_once \dirname(__DIR__) . '/vendor/autoload.php';
