<?php
namespace Emipro\Custompayment\Block;
use Magento\Customer\Model\Context;
use Magento\Sales\Model\Order;
use Magento\Setup\Exception;

class Success extends \Magento\Framework\View\Element\Template
{
    protected $_checkoutSession;
    public $nganluong_url = 'https://www.nganluong.vn/checkout.php';
    // Mã website của bạn đăng ký trong chức năng tích hợp thanh toán của NgânLượng.vn.
    public $merchant_site_code = '53006'; //100001 chỉ là ví dụ, bạn hãy thay bằng mã của bạn
    // Mật khẩu giao tiếp giữa website của bạn và NgânLượng.vn.
    public $secure_pass= '5830336b21319cce6ec20e08ca45b1b5'; //d685739bf1 chỉ là ví dụ, bạn hãy thay bằng mật khẩu của bạn
    // Nếu bạn thay đổi mật khẩu giao tiếp trong quản trị website của chức năng tích hợp thanh toán trên NgânLượng.vn, vui lòng update lại mật khẩu này trên website của bạn
    public $affiliate_code = ''; //Mã đối tác tham gia chương trình liên kết của NgânLượng.vn

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_checkoutSession = $checkoutSession;
    }
    public function buildCheckoutUrlExpand($return_url, $receiver, $transaction_info, $order_code, $price, $currency = 'vnd', $quantity = 1, $tax = 0, $discount = 0, $fee_cal = 0, $fee_shipping = 0, $order_description = '', $buyer_info = '', $affiliate_code = '')
    {
        if ($affiliate_code == "") $affiliate_code = $this->affiliate_code;
        $arr_param = array(
            'merchant_site_code'=>	strval($this->merchant_site_code),
            'return_url'		=>	strval(strtolower($return_url)),
            'receiver'			=>	strval($receiver),
            'transaction_info'	=>	strval($transaction_info),
            'order_code'		=>	strval($order_code),
            'price'				=>	strval($price),
            'currency'			=>	strval($currency),
            'quantity'			=>	strval($quantity),
            'tax'				=>	strval($tax),
            'discount'			=>	strval($discount),
            'fee_cal'			=>	strval($fee_cal),
            'fee_shipping'		=>	strval($fee_shipping),
            'order_description'	=>	strval($order_description),
            'buyer_info'		=>	strval($buyer_info), //"Họ tên người mua *|* Địa chỉ Email *|* Điện thoại *|* Địa chỉ nhận hàng"
            'affiliate_code'	=>	strval($affiliate_code)
        );

        $secure_code ='';
        $secure_code = implode(' ', $arr_param) . ' ' . $this->secure_pass;
        //var_dump($secure_code). "<br/>";
        $arr_param['secure_code'] = md5($secure_code);
        //echo $arr_param['secure_code'];
        /* */
        $redirect_url = $this->nganluong_url;
        if (strpos($redirect_url, '?') === false) {
            $redirect_url .= '?';
        } else if (substr($redirect_url, strlen($redirect_url)-1, 1) != '?' && strpos($redirect_url, '&') === false) {
            $redirect_url .= '&';
        }

        /* */
        $url = '';
        foreach ($arr_param as $key=>$value) {
            $value = urlencode($value);
            if ($url == '') {
                $url .= $key . '=' . $value;
            } else {
                $url .= '&' . $key . '=' . $value;
            }
        }
        //echo $url;
        // die;
        return $redirect_url.$url;
    }
    public function doSomething(){
        $order = $this->_checkoutSession->getLastRealOrder();
        if($order->getPayment()->getMethod() =="custompayment") {
            //echo $order->getIncrementId();
            //$return_url = $this->getBaseUrl();
            //echo $return_url;
            try {
                $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
                $customer_id = $order->getCustomerId();
                $customerObj = $objectManager->create('Magento\Customer\Model\Customer');
                $modelCustomer = $customerObj->load($order->getCustomerId());
                $price = strval(str_replace(".", "", $order->getTotalDue()));
                $balance = $modelCustomer->getData("virtual_money");
                $money = $balance - $price;
                //$modelCustomer->setData("virtual_money","abc");
                //$modelCustomer->setData("firstname","Tam");
                //$modelCustomer->save();
                //$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
                $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
                $connection = $resource->getConnection();
                $tableName = $resource->getTableName('employee'); //gives table name with prefix

//Select Data from table
                //$sql = "Select * FROM " . $tableName;
                //$result = $connection->fetchAll($sql); // gives associated array, table fields as key in array.

//Delete Data from table
                //$sql = "Delete FROM " . $tableName." Where emp_id = 10";
                //$connection->query($sql);

//Insert Data into table
                //$sql = "Insert Into " . $tableName . " (emp_id, emp_name, emp_code, emp_salary) Values ('','XYZ','ABD20','50000')";
                //$connection->query($sql);

//Update Data into table
                $sql = "UPDATE `customer_entity` SET `first_failure` = NULL, `lock_expires` = NULL, `virtual_money` = '".$money."' WHERE `customer_entity`.`entity_id` = $customer_id;";
                $connection->query($sql);
            }catch (Exception $e){
                echo $e->getMessage();
            }
            /*$receiver = "leminhtamboy@gmail.com";
            $transaction_info = "Online Bank With Ngan Luong";
            $order_code = $order->getIncrementId();
            $price = strval(str_replace(".", "", $order->getTotalDue()));
            $price = $price * 23000;
            echo $price;
            $buyer_info = $order->getBillingAddress()->getFirstname() . "*|*" . $order->getBillingAddress()->getEmail() . "*|*" . $order->getBillingAddress()->getTelephone();
            $url = $this->buildCheckoutUrlExpand($return_url, $receiver, $transaction_info, $order_code, $price, $currency = 'vnd', $quantity = 1, $tax = 0, $discount = 0, $fee_cal = 0, $fee_shipping = 0, $order_description = '', $buyer_info, $affiliate_code = '');
            echo '<meta http-equiv="refresh" content="0; url=' . $url . '" >';
            return "do something with ngan luong hoac url";*/
        }else{
            echo $this->getBaseUrl();

            return "checkout normal of default magento";
        }
    }
}