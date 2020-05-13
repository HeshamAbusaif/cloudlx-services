<?php
namespace App\Application\CloudlxServices;

use App\Domain\CloudlxServices\CloudlxServicesRepository;
use ItDevgroup\CommandBus\Command;
use ItDevgroup\CommandBus\Handler;

class GetCloudlxServiceByIdHandler implements Handler
{
    /**
     * @var CloudlxServicesRepository
     */
    private $cloudlxServicesRepository;

    /**
     * GetCloudlxServiceByIdHandler constructor.
     * @param CloudlxServicesRepository $cloudlxServicesRepository
     */
    public function __construct(CloudlxServicesRepository $cloudlxServicesRepository)
    {

        $this->cloudlxServicesRepository = $cloudlxServicesRepository;
    }

    /**
     * Handle a Command object
     *
     * @param Command $command
     *
     */
    public function handle(Command $command)
    {
        return $this->cloudlxServicesRepository->byId($command->id());
    }
}
