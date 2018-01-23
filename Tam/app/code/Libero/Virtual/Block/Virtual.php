<?php
namespace Libero\Virtual\Block;
//use \Magento\Customer\Api\CustomerRepositoryInterface;
class Virtual extends \Magento\Customer\Block\Account\Dashboard\Info{

    /**
     * @var \Magento\Customer\Helper\View
     */
    protected $_helperView;

    /**
     * @var \Magento\Customer\Helper\Session\CurrentCustomer
     */
    protected $currentCustomer;

    protected $_customerRepositoryInterface;

    public function getVirtualMoney(){
        $customerID = $this->getCustomer()->getId();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerObj = $objectManager->create('Magento\Customer\Model\Customer')->load($customerID);
        return $customerObj->getData("virtual_money");
    }
}