<?php

class Employee
{
    public $firstName;
    public $lastName;
    public $birthDay;
    public $address;
    public $position;

    public function __construct()
    {
    }
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $birthDay
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @param mixed $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function getLastName()
    {
       return $this->lastName;
    }

    /**
     * @param mixed $birthDay
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param mixed $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $position
     */
    public function getPosition()
    {
        return $this->position;
    }

}
