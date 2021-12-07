<?php

namespace Elogic\Ass\Cron;

use Elogic\Ass\Model\GunsRepository;
use Magento\Framework\Data\Collection\ModelFactory;

class SameCron
{
    /**
     * @var GunsModelFactory
     */
    private $gunsModelFactory;

    /**
     * @var GunsRepository $gunsRepository
     */

    public function __construct(
        GunsRepository $gunsRepository,
        GunsModelFactory $gunsModelFactory
    ) {
        $this->GunsRepository = $gunsRepository;
        $this->GunsModelFactory = $gunsModelFactory;
      }

    public function execute()
    {
        $gun = $this->gunsModelFactory->create();

        $caliber = rand(0.5,20);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $gun->setName($randomString);
        $gun->setType($randomString);
        $gun->setCaliber($caliber);

        $this->GunsRepository->save($gun);
    }
}
