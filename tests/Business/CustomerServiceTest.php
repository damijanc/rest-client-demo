<?php

namespace Tests\Business;

use Business\Service\CustomerService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CustomerServiceTest extends KernelTestCase
{
    /** @var  CustomerService */
    protected $service;

    protected function setUp()
    {
        parent::setUp();

        self::bootKernel();

        $container = static::$kernel->getContainer();
        $this->service = $container->get('customer_service');
    }

    public function testAddCustomer()
    {


    }

}