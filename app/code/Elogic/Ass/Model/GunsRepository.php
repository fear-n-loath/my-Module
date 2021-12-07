<?php

namespace Elogic\Ass\Model;

use Magento\Framework\Api\SearchResults;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Elogic\Ass\Api\GunsRepositoryInterface;
use Elogic\Ass\Api\Data\GunsInterface;
use Elogic\Ass\Model\ResourseModel\Guns\Collection;
use Magento\Framework\Data\CollectionFactory as GunsCollectionFactory;
use Elogic\Ass\Model\ResourseModel\Guns as GunsResource;

class GunsRepository implements GunsRepositoryInterface
{
    /**
     * @var GunsModelFactory
     */
    private $gunsModelFactory;

    /**
    * @var gunsCollectionFactory
     */
    private $gunsCollectionFactory;

    /**
     * @var GunsResource
     */
    private $resource;

    /**
     * @var SearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;


    /**
     * @param GunsModelFactory $gunsModelFactory
     * @param GunsCollectionFactory $gunsCollectionFactory
     * @param GunsResource $resource
     * @param SearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        GunsModelFactory $gunsModelFactory,
        GunsCollectionFactory $gunsCollectionFactory,
        GunsResource $resource,
        SearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->gunsModelFactory = $gunsModelFactory;
        $this->gunsCollectionFactory = $gunsCollectionFactory;
        $this->resource = $resource;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     * @throws CouldNotSaveException
     */
    public function save(GunsInterface $guns): GunsInterface
    {
        try {
            /** @var  GunsModel|GunsInterface $guns */
            $this->resource->save($guns);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }

        return $guns;
    }


    /**
     * @inheritDoc
     * @throws NoSuchEntityException
     */
    public function getById(int $gunsId): GunsInterface
    {
        /** @var  GunsModel|GunsInterface $guns */
        $guns = $this->gunsModelFactory->create();
        $guns->load($gunsId);
        if (!$guns->getId()) {
            throw new NoSuchEntityException(__(' does not exist.' . $gunsId, $gunsId));
        }

        return $guns;
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResults
    {
        $collection = $this->gunsCollectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var SearchResults $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;

    }


    /**
     * @inheritDoc
     * @throws CouldNotDeleteException
     */
    public function delete(GunsInterface $guns): bool
    {
        try {
            /** @var GunsModel $guns */
            $this->resource->delete($guns);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }

        return true;
    }

    /**
     * @inheritDoc
     * @throws CouldNotDeleteException
     */
    public function deleteById(int $gunsId): bool
    {
        try {
            $delete = $this->delete($this->getById($gunsId));
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return $delete;
    }
}
