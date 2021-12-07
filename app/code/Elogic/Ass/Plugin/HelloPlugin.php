<?php

namespace Elogic\Ass\Plugin;

use Elogic\Ass\Block\Index;

class HelloPlugin
{
    public function afterSayHello(Index $subject)
    {
        return "Hello World12";
    }

}
