<?php

namespace Elogic\Ass\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class AllowedTypes implements OptionSourceInterface
{
    /**
     * @return string[][]
     */
    public function toOptionArray()
    {
        return
            [
                ['value'=>'jpg', 'label'=>'JPG'],
                ['value'=>'img', 'label'=>'IMG'],
                ['value'=>'bmp', 'label'=>'BMP']
            ];
    }

}
