<?php


/**
 * Class Type
 */
class Type{

    /**
     * @var
     */
    private $id_type;
    private $label;
    private $price;


    /**
     * Type constructor.
     * @param $id_type
     * @param $label
     * @param $price
     */
    function __construct($id_type, $label, $price)
    {
        $this->id_type = $id_type;
        $this->label = $label;
        $this->price = $price;

    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * @param mixed $id_type
     */
    public function setIdType($id_type)
    {
        $this->id_type = $id_type;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }



}
