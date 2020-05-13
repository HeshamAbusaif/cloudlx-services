<?php
namespace App\Domain\CloudlxServices;

use Illuminate\Http\Request;

class CloudlxServicesFilter
{

    /**
     * @var int
     */
    private $id;

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return CloudlxServicesFilter
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}
