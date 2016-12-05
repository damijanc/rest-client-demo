<?php

namespace DataAccess\Repository;

use JMS\DiExtraBundle\Annotation as JMS;

/**
 * Class CustomerRepository
 * @package DataAccess\Repository
 * @JMS\Service("customer_repository")
 */
class CustomerRepository
{

    public function __construct()
    {
    }

    public function listCustomers() {

    }

    public function getCustomerById($customerId)
    {

    }

    public function saveCustomer(Customer $customer)
    {

    }
}