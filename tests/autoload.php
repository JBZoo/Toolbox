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

declare(strict_types=1);

// main autoload
if ($autoload = realpath('./vendor/autoload.php')) {
    require_once $autoload;
} else {
    echo 'Please execute "composer update" !' . PHP_EOL;
    exit(1);
}
