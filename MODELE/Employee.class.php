<?php


class Employee extends Person{

    /**
     * @var
     */
    private $id_employee;
    private $login;
    private $password;
    private $mail;
    private $role;


    /**
     * Employee constructor.
     * @param $password
     * @param $id_employee
     * @param $login
     * @param $mail
     * @param $role
     */
    function __construct($password, $id_employee, $login, $mail, $role)
    {

        parent::__construct($id, $lastname, $firstName);
        $this->id_employee = $id_employee;
        $this->password = $password;
        $this->mail = $mail;
        $this->role = $role;
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getIdEmployee()
    {
        return $this->id_employee;
    }

    /**
     * @param mixed $id_employee
     */
    public function setIdEmployee($id_employee)
    {
        $this->id_employee = $id_employee;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }




}