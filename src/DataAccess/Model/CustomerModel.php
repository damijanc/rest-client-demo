<?php

namespace DataAccess\Model;

use JMS\Serializer\Annotation as JMS;

class CustomerModel
{
    /**
     * @var string
     *
     * @JMS\SerializedName("first_name")
     * @JMS\Type("string")
     */
    private $firstName;

    /**
     * @var string
     *
     * @JMS\SerializedName("last_name")
     * @JMS\Type("string")
     */
    private $lastName;

    /**
     * @var string
     *
     * @JMS\SerializedName("gender")
     * @JMS\Type("string")
     */
    private $gender;

    /**
     * @var string
     *
     * @JMS\SerializedName("email")
     * @JMS\Type("string")
     */
    private $email;

    /**
     * @var string
     *
     * @JMS\SerializedName("country")
     * @JMS\Type("string")
     */
    private $country;

    /**
     * @var integer
     *
     * @JMS\SerializedName("id")
     * @JMS\Type("integer")
     */
    private $id;

    //*************** GENERATED CODE *******************

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}