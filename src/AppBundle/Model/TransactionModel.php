<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation as JMS;

class TransactionModel
{
    /** @var  integer
     * @JMS\Type("integer")
     */
    protected $id;
    /** @var  double
     * @JMS\Type("double")
     */
    protected $amount;
    /** @var  integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("customerId")
     */
    protected $customerId;

    /**********************GENERATED CODE ********************/

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

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
}