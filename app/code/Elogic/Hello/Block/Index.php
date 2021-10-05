<?php
namespace Elogic\Hello\Block;

use Magento\Framework\View\Element\Template;

/**
 * class Index
 */
class Index extends Template
{
    public function sayHello()
    {
        return "Hello " . $this->getData('key');
    }
}
