<?php

namespace Business\Service;

use DataAccess\Repository\CustomerRepository;
use JMS\DiExtraBundle\Annotation as JMS;
use JMS\Serializer\SerializerInterface;

/**
 * Class CustomerService
 * @package Business\Service
 *
 * @JMS\Service("customer_service")
 */
class CustomerService
{
    /** @var CustomerRepository  */
    protected $repository;
    /** @var SerializerInterface  */
    protected $serializer;

    /**
     * CustomerController constructor.
     * @param CustomerRepository $repository
     * @param SerializerInterface $serializer
     *
     * @JMS\InjectParams({
     *     "repository" = @JMS\Inject("customer_repository"),
     *     "serializer" = @JMS\Inject("jms_serializer"),
     * })
     */
    public function __construct(CustomerRepository $repository, SerializerInterface $serializer)
    {
        $this->repository = $repository;
        $this->serializer = $serializer;
    }

    public function addCustomer($json)
    {

    }

    public function updateCustomer($json)
    {

    }
}