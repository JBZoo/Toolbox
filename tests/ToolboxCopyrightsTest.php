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

namespace JBZoo\PHPUnit;

/**
 * Class ToolboxCopyrightsTest
 * @package JBZoo\PHPUnit
 */
class ToolboxCopyrightsTest extends AbstractCopyrightTest
{
    protected $packageName     = "Toolbox";
    protected $packageVendor   = 'JBZoo';
    protected $isPhpStrictType = true;

    protected function setUp(): void
    {
        $this->excludePaths[] = 'src';
        parent::setUp();
    }
}
