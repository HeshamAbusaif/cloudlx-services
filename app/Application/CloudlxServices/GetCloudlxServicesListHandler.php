<?php
namespace App\Application\CloudlxServices;

use App\Domain\CloudlxServices\CloudlxServicesRepository;
use ItDevgroup\CommandBus\Command;
use ItDevgroup\CommandBus\Handler;

class GetCloudlxServicesListHandler implements Handler
{
    /**
     * @var CloudlxServicesRepository
     */
    private $cloudlxServicesRepository;

    /**
     * GetCloudlxServicesListHandler constructor.
     * @param CloudlxServicesRepository $cloudlxServicesRepository
     */
    public function __construct(
        CloudlxServicesRepository $cloudlxServicesRepository
    ) {

        $this->cloudlxServicesRepository = $cloudlxServicesRepository;
    }
    /**
     * Handle a Command object
     *
     * @param GetCloudlxServicesList|Command $command
     *
     */
    public function handle(Command $command)
    {
        return $this->cloudlxServicesRepository->all($command->filter(), $command->pagination(), $command->order());
    }
}
