<?php

namespace Elogic\Ass\Model;

use Elogic\Ass\Api\Data\GunsInterface;
use Magento\Framework\Model\AbstractModel;
use Elogic\Ass\Model\ResourseModel\Guns as GunsResourseModel;

/**
 * Class GunsModel
 */
class GunsModel extends AbstractModel implements GunsInterface
{
    protected function _construct()
    {
        $this->_init(GunsResourseModel::class);
    }
    public function getId()
    {
        return $this->getData(self::ENTITY_ID);
    }
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * @inheritDoc
     */
    public function getCaliber()
    {
        return $this->getData(self::CALIBER);
    }

    /**
     * @inheritDoc
     */
    public function setName($name): GunsInterface
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function setType($type): GunsInterface
    {
        return $this->setData(self::TYPE, $type);
    }

    /**
     * @inheritDoc
     */
    public function setCaliber($caliber): GunsInterface
    {
        return $this->setData(self::CALIBER, $caliber);
    }

}
