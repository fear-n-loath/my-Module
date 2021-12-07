<?php

namespace Elogic\Hello\Plugin;

use Magento\TestFramework\Event\Magento;

class PricePlugin
{
    public function afterGetPrice()
    {
        return "777";
    }
}
