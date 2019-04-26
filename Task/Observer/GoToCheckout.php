<?php

namespace Test\Task\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class GoToCheckout implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return $this|void
     */
    public function execute(Observer $observer)
    {
        $redirect = $observer->getEvent()->getRedirect();
        $redirect->setRedirect(true)->setPath('checkout')->setArguments([]);
        return $this;
    }
}
