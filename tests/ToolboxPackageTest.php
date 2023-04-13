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

namespace JBZoo\PHPUnit;

final class ToolboxPackageTest extends \JBZoo\Codestyle\PHPUnit\AbstractPackageTest
{
    protected string $packageName = 'Toolbox';

    protected function setUp(): void
    {
        $this->excludedPathsForCopyrights[] = 'src';
        $this->excludePaths[]               = 'src';
        parent::setUp();
    }
}
