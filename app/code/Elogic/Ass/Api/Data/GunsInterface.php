<?php

namespace Elogic\Ass\Api\Data;

interface GunsInterface
{
    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const TYPE = 'type';
    const CALIBER = 'caliber';

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getCaliber();

    /**
     * @param $name
     * @return GunsInterface
     */
    public function setName($name): GunsInterface;

    /**
     * @param $type
     * @return GunsInterface
     */
    public function setType($type): GunsInterface;

    /**
     * @param $caliber
     * @return GunsInterface
     */
    public function setCaliber($caliber): GunsInterface;

}
