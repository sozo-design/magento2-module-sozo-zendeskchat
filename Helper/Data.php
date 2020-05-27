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

namespace Sozo\ZendeskChat\Helper;


use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Module\ModuleListInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package Sozo\ZendeskChat\Helper
 */
class Data extends AbstractHelper
{

    const SZ_ZENDESKCHAT_ENABLED = 'sozo_zendeskchat/general/enabled';
    const SZ_ZENDESKCHAT_WIDGET_ID = 'sozo_zendeskchat/general/widget_id';

    /**
     * @var ModuleListInterface
     */
    protected $moduleList;

    /**
     * Data constructor.
     * @param Context $context
     * @param ModuleListInterface $moduleList
     */
    public function __construct(
        Context $context,
        ModuleListInterface $moduleList
    ){
        $this->moduleList = $moduleList;
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::SZ_ZENDESKCHAT_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getWidgetId()
    {
        return $this->scopeConfig->getValue(self::SZ_ZENDESKCHAT_WIDGET_ID, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getExtensionVersion()
    {
        $moduleCode = 'Sozo_ZendeskChat';
        $moduleInfo = $this->moduleList->getOne($moduleCode);
        return $moduleInfo['setup_version'];
    }

}
