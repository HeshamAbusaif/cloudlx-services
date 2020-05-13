<?php

namespace App\Http\Controllers;

use App\Domain\Settings\SettingsManager;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Application;
use ItDevgroup\CommandBus\Command;
use ItDevgroup\CommandBus\CommandBus;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Controller constructor.
     *
     * @param CommandBus $dispatcher
     * @param Application $app
     */
    public function __construct(
        CommandBus $dispatcher,
        Application $app
    ) {
        $this->dispatcher = $dispatcher;
        $this->app = $app;
    }

    /**
     * @param Command $command
     * @return mixed
     */
    public function dispatch(Command $command)
    {
        return $this->dispatcher->execute($command);
    }
}
