<?php
class Person
{
    private $name;
    private $email;
    public static $ageLimit = 40;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __class__ . ' created<br>';
    }
    public function getName()
    {
        return $this->name . '<br>';
    }
    public function getEmail()
    {
        return $this->email . '<br>';
    }
}

// $person1 = new Person('jon', 'v@g.co');

// echo $person1->getName();
// echo $person1->getEmail();


class Customer extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance . '<br>';
    }
}

// $c1 = new Customer('bill', 'v', 10);

// echo $c1->getBalance();

echo Person::$ageLimit;
