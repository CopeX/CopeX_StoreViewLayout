<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace CopeX\StoreViewLayout\Observer\Frontend\Load;

class LayoutBefore implements \Magento\Framework\Event\ObserverInterface
{
    protected $storeManager;
    /**
     * addStoreLayout constructor.
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->storeManager = $storeManager;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //['full_action_name' => $this->request->getFullActionName(), 'layout' => $this->layout]
        $layout = $observer->getLayout();
        $layout->getUpdate()->addHandle('website_' . $this->storeManager->getWebsite()->getCode());
        $layout->getUpdate()->addHandle('store_' . $this->storeManager->getStore()->getCode());
    }
}
