<?php

namespace AppBundle\Controller;

use Business\Service\CustomerService;
use DataAccess\Repository\CustomerRepository;
use JMS\DiExtraBundle\Annotation as JMS;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as R;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CustomerController
 * @package AppBundle\Controller
 * @R\Route("/api/customer")
 */
class CustomerController
{
    /** @var CustomerRepository  */
    protected $repository;
    /** @var SerializerInterface  */
    protected $serializer;
    /** @var CustomerService  */
    protected $service;

    /**
     * CustomerController constructor.
     * @param CustomerRepository $repository
     * @param SerializerInterface $serializer
     * @param CustomerService $service
     * @JMS\InjectParams({
     *     "repository" = @JMS\Inject("customer_repository"),
     *     "serializer" = @JMS\Inject("jms_serializer"),
     *     "service" = @JMS\Inject("customer_service"),
     * })
     */
    public function __construct(
        CustomerRepository $repository,
        SerializerInterface $serializer,
        CustomerService $service
    ) {
        $this->repository = $repository;
        $this->serializer = $serializer;
        $this->service = $service;
    }

    /**
     * @R\Route("", name="customer_get_all")
     * @R\Method("GET")
     */
    public function getAction()
    {
    }
}
