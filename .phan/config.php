<?php

/**
 * JBZoo - Toolbox
 *
 * This file is part of the JBZoo project.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Toolbox
 * @license    MIT
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @link       https://github.com/JBZoo/Toolbox
 */

$default = include __DIR__ . '/../vendor/jbzoo/codestyle/src/phan/default.php';

return array_merge($default, [
    'directory_list' => [
        'src',

        'vendor/guzzlehttp/guzzle',
        'vendor/guzzlehttp/promises',
        'vendor/psr/http-message',
        'vendor/rmccue/requests',
        'vendor/symfony/yaml',
        'vendor/wikimedia/less.php',
        'vendor/symfony/console',
        'vendor/symfony/process',
    ]
]);
