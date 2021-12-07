<?php

namespace Elogic\Ass\Block;

use Elogic\Ass\Api\GunsRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\View\Element\Template;
use Elogic\Ass\Model\GunsRepository;
use Elogic\Ass\Model\GunsModel;
use Elogic\Ass\Api\Data\GunsInterface;

class GetModel extends Template
{
    /* @var GunsRepository
     */
    private GunsRepository $gunsRepository;

    public function __construct(
        GunsRepository $gunsRepository,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->gunsRepository = $gunsRepository;
    }

    public function getModel()
    {
         $key = $this->getData('key');
        return $this->gunsRepository->getById($key);
    }
    public function getCollection()
    {
        return $this->gunsRepository->getList();
    }
}
