<?php

namespace Elogic\Ass\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResults;
use Elogic\Ass\Api\Data\GunsInterface;

/**
 * Interface ProviderRepositoryInterface
 */
interface GunsRepositoryInterface
{
    /**
     * @param GunsInterface $guns
     * @return GunsInterface
     */
    public function save(GunsInterface $guns): GunsInterface;

    /**
     * @param int $gunsId
     * @return GunsInterface
     */
    public function getById(int $gunsId): GunsInterface;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResults
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResults;

    /**
     * @param GunsInterface $guns
     * @return bool
     */
    public function delete(GunsInterface $guns): bool;

    /**
     * @param int $gunsId
     * @return bool
     */
    public function deleteById(int $gunsId): bool;



}
