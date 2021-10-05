<?php

namespace Elogic\Hello\Plugin;

use Elogic\Hello\Block\Index;

class HelloPlugin
{
    public function afterSayHello(Index $subject)
    {
        return "Hello World12";
    }
}
