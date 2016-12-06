<?php

namespace DataAccess;

interface RestClientInterface
{
    /**
     * @param $url
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($url);

    /**
     * @param $url
     * @param $body
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function send($url, $body);
}
