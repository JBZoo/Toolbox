<?php

/**
 * JBZoo Toolbox - Toolbox.
 *
 * This file is part of the JBZoo Toolbox project.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @see        https://github.com/JBZoo/Toolbox
 */

declare(strict_types=1);

$default = include __DIR__ . '/vendor/jbzoo/codestyle/src/phan.php';

$index = array_search('UnusedSuppressionPlugin', $default['plugins'], true);
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
        'vendor/bluepsyduck/symfony-process-manager/src',
        'vendor/symfony/console',
        'vendor/symfony/process',

        // phpunit
        'vendor/phpunit/php-code-coverage/src',
        'vendor/phpunit/php-file-iterator/src',
        'vendor/phpunit/phpunit/src',
        'vendor/symfony/finder',
        'vendor/ulrichsg/getopt-php/src',

        // composer-diff
        'vendor/composer/semver/src',

        // codestyle
        'vendor/friendsofphp/php-cs-fixer/src',
        'vendor/kubawerlos/php-cs-fixer-custom-fixers/src',
        'vendor/phan/phan/src',
    ],
]);
