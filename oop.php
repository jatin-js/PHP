<?php
class Person
{
    private $name;
    private $email;
    private static $ageLimit = 40;

    public function __construct($name, $email)    // IN PHP4, we have to use name of class.
    {
        $this->name = $name;
        $this->email = $email;
        // echo "Person created<br>";
        echo __CLASS__ . ' created<br>';       // Magic property
    }

    public function __destruct()
    {
        echo __CLASS__ . ' distroyed<br>';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . '<br>';
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email . '<br>';
    }

    public static function getAgeLimit()
    {
        return self::$ageLimit;
    }
}

# Static props and method
// echo Person::$ageLimit;
// echo Person::getAgeLimit();

// $person1 = new Person('Jatin Singh', 'jatin@gmail.com');

// $person1->setName('Jatin Singh');

// echo $person1->getName();

// $person1->name = 'Jatin Singh';
// echo $person1->name;

class Customer extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email);
        $this->balance = $balance;
        echo 'A new ' . __CLASS__ . ' has been created<br>';
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

// $customer1 = new Customer('Jatin Singh', 'jatin@gmail.com', 300);

// echo $customer1->getBalance();
