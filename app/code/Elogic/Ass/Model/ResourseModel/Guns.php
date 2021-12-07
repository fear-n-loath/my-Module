<?php

namespace Elogic\Ass\Model\ResourseModel;

use Elogic\Ass\Api\Data\GunsInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Elogic\Ass\Model\GunsModel;

/**
 * Class guns
 */
class Guns extends AbstractDb
{
    const GUNS_TABLE = 'guns_table';

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(
            self::GUNS_TABLE,
            GunsInterface::ENTITY_ID
        );
    }
}
