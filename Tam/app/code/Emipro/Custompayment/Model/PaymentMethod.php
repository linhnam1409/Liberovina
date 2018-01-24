<?php
 
namespace Emipro\Custompayment\Model;
 
/**
 * Pay In Store payment method model
 */
class PaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod
{
 
    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'custompayment';
    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        /*if (!$this->canAuthorize()) {
            throw new \Magento\Framework\Exception\LocalizedException(__('The authorize action is not available asdasdasd.'));
        }*/
        return $this;
    }
}