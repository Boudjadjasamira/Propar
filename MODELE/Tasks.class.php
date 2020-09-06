<?php


/**
 * Class Tasks
 */
class Tasks
{

    /**
     * @var
     */
    private $id_task;
    private $label;
    private $description;

    /**
     * Tasks constructor.
     * @param $id_task
     * @param $label
     * @param $description
     */
    function __construct($id_task, $label, $description)
    {
        $this->label = $label;
        $this->id_task = $id_task;
        $this->description = $description;

    }

    /**
     * @return mixed
     */
    public function getIdTask()
    {
        return $this->id_task;
    }

    /**
     * @param mixed $id_task
     */
    public function setIdTask($id_task)
    {
        $this->id_task = $id_task;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }






}