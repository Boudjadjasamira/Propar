<?php


class Customer extends Person{

    /**
     * @var
     */
    private $id_customer;
    private $mail;

    /**
     * Customer constructor.
     * @param $id_customer
     * @param $mail
     */
    function __construct($id_customer, $mail)
    {

        parent::__construct($id, $name, $firstName);
        $this->id_customer = $id_customer;
        $this->mail = $mail;

    }

//fonction insertion en BDD
{
    public static function createCustomer(Customer $customer)
    {
        $db = Singleton::getInstance()->getConnection();
        $requete = $db->prepare('INSERT INTO customer (id_customer, name, firstname, mail) 
        VALUES (:id_customer, :name, :firstname, :mail)');
        $requete->execute([
            'name' => $staff->getname(),
            'firstname' => $staff->getFirstname(),
            'id_customer' => $staff->getId_customer(),
            'mail' => $staff->getMail(),
        ]);

    }
    /**
     * @return mixed
     */
    public function getIdCustomer()
    {
        return $this->id_customer;
    }

    /**
     * @param mixed $id_customer
     */
    public function setIdCustomer($id_customer)
    {
        $this->id_customer = $id_customer;
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



}