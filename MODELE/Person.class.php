<?php

abstract class Person
{
    /**
     * @var
     */
    protected $id;
    protected $name;
    protected $firstName;


    /**
     * Person constructor.
     * @param $id
     * @param $name
     * @param $firstName
     */
    public function __construct($id, $name, $firstName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstName = $firstName;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setLastName($name)
    {
        $this->lastName = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

}

