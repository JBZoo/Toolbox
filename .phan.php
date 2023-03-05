<?php

/**
 * JBZoo - Toolbox.
 *
 * This file is part of the JBZoo project.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @see       https://github.com/JBZoo/Toolbox
 */

declare(strict_types=1);

$default = include __DIR__ . '/vendor/jbzoo/codestyle/src/phan/default.php';

$index = \array_search('UnusedSuppressionPlugin', $default['plugins'], true);
unset($default['plugins'][$index]);

return \array_merge($default, [
    'file_list' => [
        'src/phpunit/functions/defines.php',
        'src/phpunit/functions/aliases.php',
        'src/phpunit/functions/tools.php',
    ],

    'directory_list' => [
        'src',

        // http-client
        'vendor/guzzlehttp/guzzle',
        'vendor/guzzlehttp/promises',
        'vendor/psr/http-message',
        'vendor/rmccue/requests',

        // data
        'vendor/symfony/yaml',

        // less, assets
        'vendor/wikimedia/less.php',

        // utils
        'vendor/symfony/console',
        'vendor/symfony/process',

        // phpunit
        'vendor/phpunit/phpunit/src',
        'vendor/phpunit/php-code-coverage/src',
        'vendor/ulrichsg/getopt-php/src',
        'vendor/symfony/finder',

        // composer-diff
        'vendor/composer/semver/src',

        // codestyle
        'vendor/phan/phan/src',
    ],
]);
