<?php
namespace App\Domain\Core;

class Order
{
    /**
     * @var string
     */
    private $field = '';

    /**
     * @var string
     */
    private $direction = '';

    /**
     * @return string
     */
    public function field()
    {
        return $this->field;
    }

    /**
     * @param string $field
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @return string
     */
    public function direction()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }
}
