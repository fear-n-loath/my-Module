<?php

namespace Elogic\Ass\Plugin;

use Magento\TestFramework\Event\Magento;
use Magento\Catalog\Model\Product;

class PricePlugin
{
    public function afterGetPrice()
    {
        return "777";
    }

}
