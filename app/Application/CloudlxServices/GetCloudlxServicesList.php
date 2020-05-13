<?php
namespace App\Application\CloudlxServices;

use App\Domain\CloudlxServices\CloudlxServicesFilter;
use App\Domain\Core\Order;
use ItDevgroup\CommandBus\Command;
use App\Domain\Core\Pagination;

class GetCloudlxServicesList implements Command
{
    /**
     * @var CloudlxServicesFilter
     */
    private $filter;

    /**
     * @var null
     */
    private $pagination;

    /**
     * @var Order
     */
    private $order;


    /**
     * GetCloudlxServicesList constructor.
     * @param CloudlxServicesFilter $filter
     * @param Pagination|null $pagination
     * @param Order $order
     */
    public function __construct(CloudlxServicesFilter $filter, $pagination = null, Order $order = null)
    {
        $this->pagination = $pagination;
        $this->filter = $filter;
        $this->order = $order;
    }

    /**
     * @return CloudlxServicesFilter
     */
    public function filter()
    {
        return $this->filter;
    }

    /**
     * @return null
     */
    public function pagination()
    {
        return $this->pagination;
    }

    /**
     * @return Order
     */
    public function order()
    {
        return $this->order;
    }
}
