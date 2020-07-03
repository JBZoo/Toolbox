#
# JBZoo - Toolbox
#
# This file is part of the JBZoo project.
# For the full copyright and license information, please view the LICENSE
# file that was distributed with this source code.
#
# @package    Toolbox
# @license    MIT
# @copyright  Copyright (C) JBZoo.com, All rights reserved.
# @link       https://github.com/JBZoo/Toolbox
#

ifneq (, $(wildcard ./vendor/jbzoo/codestyle/src/init.Makefile))
    include ./vendor/jbzoo/codestyle/src/init.Makefile
endif


update: ##@Project Install/Update all 3rd party dependencies
	$(call title,"Install/Update all 3rd party dependencies")
	@echo "Composer flags: $(JBZOO_COMPOSER_UPDATE_FLAGS)"
	@composer update $(JBZOO_COMPOSER_UPDATE_FLAGS)
	@rm -rf   `pwd`/src
	@mkdir -v `pwd`/src
	@touch    `pwd`/src/.gitkeep
	@cp -r `pwd`/vendor/jbzoo/assets/src       `pwd`/src/assets
	@cp -r `pwd`/vendor/jbzoo/data/src         `pwd`/src/data
	@cp -r `pwd`/vendor/jbzoo/event/src        `pwd`/src/event
	@cp -r `pwd`/vendor/jbzoo/http-client/src  `pwd`/src/http-client
	@cp -r `pwd`/vendor/jbzoo/image/src        `pwd`/src/image
	@cp -r `pwd`/vendor/jbzoo/less/src         `pwd`/src/less
	@cp -r `pwd`/vendor/jbzoo/mermaid-php/src  `pwd`/src/mermaid-php
	@cp -r `pwd`/vendor/jbzoo/path/src         `pwd`/src/path
	@cp -r `pwd`/vendor/jbzoo/utils/src        `pwd`/src/utils


test-all: ##@Project Run all project tests at once
	@make test
	@make test-composer
	@make report-composer-graph
