<?php

namespace DataAccess;

use JMS\DiExtraBundle\Annotation as JMS;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;

/**
 * Class RestClient
 *
 * @JMS\Service("rest_client")
 */
class RestClient implements RestClientInterface
{
    protected $client;

    /**
     * RestClient constructor.
     * @param ClientInterface $client
     *
     * @JMS\InjectParams({
     *     "client" = @JMS\Inject("guzzle_client"),
     * })
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param $url
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($url)
    {
        $request = new Request('GET', $url, ['content-type' => 'application\json']);
        return $this->client->send($request);
    }
}
