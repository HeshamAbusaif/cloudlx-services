<?php
namespace App\Application\CloudlxServices;

use ItDevgroup\CommandBus\Command;

class GetCloudlxServiceById implements Command
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetCloudlxServiceById constructor.
     * @param int $id
     */
    public function __construct($id)
    {

        $this->id = $id;
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }
}
