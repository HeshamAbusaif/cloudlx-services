<?php
namespace App\Domain\CloudlxServices;

use App\Domain\Core\EntityNotFound;

class CloudlxServicesNotFound extends EntityNotFound
{
    /**
     * @param int $id
     *
     * @return CloudlxServicesNotFound
     */
    public static function fromId($id)
    {
        return new CloudlxServicesNotFound("CloudlxService with id #{$id} not found.");
    }
}
