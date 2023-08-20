<?php
namespace Aquil\FirstModule\Observer;
 
use Magento\Framework\Event\ObserverInterface;
 
class RestrictAddToCart implements ObserverInterface
{
    /**
     * @var \Magento\Framework\Message\ManagerInterface
     */
    protected $_messageManager;
 
    /**
     * @param \Magento\Framework\Message\ManagerInterface $messageManager
     */
    public function __construct(
        \Magento\Framework\Message\ManagerInterface $messageManager
    )
    {
        $this->_messageManager = $messageManager;
    }
 
    /**
     * add to cart event handler.
     *
     * @param \Magento\Framework\Event\Observer $observer
     *
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {

                $this->_messageManager->addError(__('my custom message from the observer'));
                // //set false if you not want to add product to cart
                $observer->getRequest()->setParam('product', false);
                return $this;
        
 
    }
}