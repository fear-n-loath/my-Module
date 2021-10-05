<?php

namespace Elogic\Hello\Model;

use Psr\Log\Test\LoggerInterface;

class CategoryName extends \Magento\Catalog\Model\Category
{
    /*
     * @var Logger
     */
    private $logger;


    public function construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    public function getName()
    {
        return "Bla-bla-bla";
    }
}
