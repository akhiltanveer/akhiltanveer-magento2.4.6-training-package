<?php
namespace Aquil\FirstModule\Plugin\Model\Checkout\Cart;


use Magento\Framework\Exception\LocalizedException;

class Plugin
{ 
    public function beforeAddProduct($subject, $productInfo, $requestInfo = null)
 {

    try {

        // echo "this is my plugin custom";
        // exit;

        } catch (\Exception $e) {

    throw new LocalizedException(__($e->getMessage()));
     }

 return [$productInfo, $requestInfo];
 }
}