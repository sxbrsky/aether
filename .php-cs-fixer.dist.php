<?php

/*
 * This file is part of the sxbrsky/aether.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

$finder = PhpCsFixer\Finder::create()
  ->name('*.php')
  ->ignoreDotFiles(TRUE)
  ->ignoreVCS(TRUE);

$config = new PhpCsFixer\Config();
$config->setFinder($finder)
  ->setRules([
    '@PSR12' => TRUE,
    'array_syntax' => ['syntax' => 'short'],
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
    'no_unused_imports' => TRUE,
    'not_operator_with_successor_space' => TRUE,
    'trailing_comma_in_multiline' => TRUE,
    'phpdoc_scalar' => TRUE,
    'unary_operator_spaces' => TRUE,
    'binary_operator_spaces' => TRUE,
    'blank_line_before_statement' => [
      'statements' => [
        'break',
        'continue',
        'declare',
        'return',
        'throw',
        'try',
      ],
    ],
    'phpdoc_single_line_var_spacing' => TRUE,
    'phpdoc_var_without_name' => TRUE,
    'class_attributes_separation' => [
      'elements' => [
        'method' => 'one',
      ],
    ],
    'braces' => [
      'allow_single_line_closure' => TRUE,
      'position_after_anonymous_constructs' => 'same',
      'position_after_functions_and_oop_constructs' => 'next',
      'position_after_control_structures' => 'same',
    ],
    'method_argument_space' => [
      'on_multiline' => 'ensure_fully_multiline',
      'keep_multiple_spaces_after_comma' => TRUE,
    ],
    'single_trait_insert_per_statement' => TRUE,
  ]);

return $config;
