<?php

namespace DataAccess\Repository;

use DataAccess\Model\CustomerListModel;
use DataAccess\Model\CustomerModel;
use DataAccess\RestClient;
use DataAccess\RestClientInterface;
use JMS\DiExtraBundle\Annotation as JMS;
use JMS\Serializer\SerializerInterface;

/**
 * Class CustomerRepository
 * @package DataAccess\Repository
 * @JMS\Service("customer_repository")
 */
class CustomerRepository
{
    const RESOURCE = '/customer';

    /** @var RestClientInterface  */
    protected $client;

    /** @var  SerializerInterface */
    protected $serializer;

    public function __construct(RestClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    /**
     * @return CustomerModel[]
     */
    public function listCustomers()
    {
         $response = $this->client->get(self::RESOURCE);
         $body = (string) $response->getBody();
         /** @var CustomerListModel $data */
         $data = $this->serializer->deserialize($body, CustomerListModel::class, 'json');
         return $data->getData();
    }

    public function getCustomerById($customerId)
    {
        $response = $this->client->get(implode('/', [self::RESOURCE, $customerId]));
        $body = (string) $response->getBody();
        /** @var CustomerListModel $data */
        $data = $this->serializer->deserialize($body, CustomerListModel::class, 'json');
        return $data->getData();
    }

    public function saveCustomer(Customer $customer)
    {

    }
}