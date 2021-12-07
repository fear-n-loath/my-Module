<?php

namespace Elogic\Hello\Plugin;

class ControllerPlugin
{
    public function afterGetResult(\Elogic\Hello\Controller\Index\Index $subject, $response, $request)
    {
        return $request->getParam('q2');
    }
}
