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

namespace Sozo\ZendeskChat\Block\System\Config\Form\Fieldset;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;
use Sozo\ZendeskChat\Helper\Data;

/**
 * Class Details
 * @package Sozo\ZendeskChat\Block\System\Config\Form\Fieldset
 */
class Details extends Template implements RendererInterface
{

    /**
     * @var Data
     */
    protected $helper;

    /**
     * @var string
     */
    protected $_template = 'Sozo_ZendeskChat::system/config/fieldset/details.phtml';

    /**
     * Details constructor.
     * @param Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }

    /**
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        return $this->toHtml();
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->helper->getExtensionVersion();
    }

}
