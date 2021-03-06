<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Core Bundle.
 *
 * Copyright 2017 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2017 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\CoreBundle\Model;

use SWP\Bundle\CoreBundle\Widget\ContentListWidget;
use SWP\Bundle\CoreBundle\Widget\LiveblogWidgetHandler;
use SWP\Bundle\TemplatesSystemBundle\Model\WidgetModel as BaseWidgetModel;
use SWP\Component\MultiTenancy\Model\TenantAwareInterface;
use SWP\Component\MultiTenancy\Model\TenantAwareTrait;

class WidgetModel extends BaseWidgetModel implements WidgetModelInterface, TenantAwareInterface
{
    const TYPE_LIST = 4;
    const TYPE_LIVEBLOG = 5;

    use TenantAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function getTypes(): array
    {
        return parent::getTypes() + [
            self::TYPE_LIST => ContentListWidget::class,
            self::TYPE_LIVEBLOG => LiveblogWidgetHandler::class,
        ];
    }
}
