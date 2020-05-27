<?php
/**
 * SOZO Design Ltd
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the SOZO Proprietary EULA
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    SOZO Design Ltd
 * @package     Sozo_ZendeskChat
 * @copyright   Copyright (c) 2020 SOZO Design Ltd (https://sozodesign.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Sozo\ZendeskChat\Block;


use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Sozo\ZendeskChat\Helper\Data;

class Widget extends Template
{

    protected $helper;

    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ){
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    public function getWidgetId()
    {
        return $this->helper->getWidgetId();
    }

}
