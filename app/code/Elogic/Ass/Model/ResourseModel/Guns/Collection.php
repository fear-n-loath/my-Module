<?php

namespace Elogic\Ass\Model\ResourseModel\Guns;

use Elogic\Ass\Api\Data\GunsInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Elogic\Ass\Model\GunsModel;
use Elogic\Ass\Model\ResourseModel\Guns as GunsResourseModel;

class Collection extends AbstractCollection
{
    /**
     * {@inheritdoc}
     */
    protected $_idFieldName = GunsInterface::ENTITY_ID;

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(
            GunsModel::class,
            GunsResourseModel::class
        );
    }

}
