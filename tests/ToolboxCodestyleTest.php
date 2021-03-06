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
 * Class ToolboxCodestyleTest
 * @package JBZoo\PHPUnit
 */
class ToolboxCodestyleTest extends AbstractCodestyleTest
{
    protected function setUp(): void
    {
        $this->excludePaths[] = 'src';
        parent::setUp();
    }

    public function testClassesPhpDocs(): void
    {
        skip('Not actual');
    }
}
