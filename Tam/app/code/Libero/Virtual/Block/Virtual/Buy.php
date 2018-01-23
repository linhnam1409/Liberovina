<?php
namespace Libero\Virtual\Block\Virtual;

class Buy extends \Magento\Customer\Block\Account\Dashboard\Info
{
    public function getVirtualMoney(){
        $customerID = $this->getCustomer()->getId();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerObj = $objectManager->create('Magento\Customer\Model\Customer')->load($customerID);
        return $customerObj->getData("virtual_money");
    }
    public function getIdCustomer(){
        $customerID = $this->getCustomer()->getId();
        return $customerID;
    }
}