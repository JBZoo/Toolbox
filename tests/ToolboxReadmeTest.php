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

namespace JBZoo\PHPUnit;

/**
 * Class ToolboxReadmeTest
 *
 * @package JBZoo\PHPUnit
 */
class ToolboxReadmeTest extends AbstractReadmeTest
{
    protected $packageName = 'Toolbox';

    /**
     * @var string[]
     */
    protected $badgesTemplate = [
        'travis',
        'psalm_coverage',
        '__BR__',
        'latest_stable_version',
        'latest_unstable_version',
        'dependents',
        'github_issues',
        'total_downloads',
        'github_license',
    ];
}
