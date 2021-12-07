<?php

namespace Elogic\Ass\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddEntity implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }


        /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $setup = $this->moduleDataSetup;

        $data[] = [
            'entity_id' => null,
            'name' => 'uzi',
            'type' => 'submachinegun',
            'caliber' => 9
        ];


        $this->moduleDataSetup->getConnection()->insertArray(
            $this->moduleDataSetup->getTable('guns_table'),
            ['entity_id', 'name' , 'type' , 'caliber'],
            $data
        );
        $this->moduleDataSetup->endSetup();

        ;
    }
    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }
}
