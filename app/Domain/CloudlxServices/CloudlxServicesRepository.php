<?php
namespace App\Domain\CloudlxServices;

use App\Domain\Core\Order;
use App\Domain\Core\Pagination;

interface CloudlxServicesRepository
{
    /**
     * @param CloudlxServicesFilter $cloudlxServicesFilter
     * @param Pagination|null $pagination
     * @param Order|null $cloudlxServicesOrder
     * @return CloudlxServices[]
     */
    public function all(CloudlxServicesFilter $cloudlxServicesFilter, $pagination = null, Order $cloudlxServicesOrder = null);

    /**
     * @param int $id
     * @return CloudlxService
     */
    public function byId($id);

}
