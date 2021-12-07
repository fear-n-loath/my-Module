<?php

namespace Elogic\Ass\Block;

use Elogic\Ass\Api\GunsRepositoryInterface;
use Magento\Framework\View\Element\Template;
use Elogic\Ass\Plugin\HelloPlugin;

class Index extends Template
{
    public function sayHello()
    {
        return "Hello " . $this->getData('key');
    }
}
