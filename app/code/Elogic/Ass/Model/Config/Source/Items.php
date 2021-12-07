<?php

namespace Elogic\Ass\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class Items implements OptionSourceInterface
{
    /**
     * @return string[][]
     */
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public function toOptionArray()
    {
        $data[] = ['entity_id', 'name' , 'type' , 'caliber'];
        $this->moduleDataSetup->getConnection()->getTables(
            $data[]= $this->moduleDataSetup->getTable('guns_table')
        );

        return ['entity_id', 'name' , 'type' , 'caliber'];//$data;
         //   [
          //      ['value'=>'jpg', 'label'=>'JPG'],
          //     ['value'=>'img', 'label'=>'IMG'],
          //     ['value'=>'bmp', 'label'=>'BMP']
           // ]
        ;
    }
}
