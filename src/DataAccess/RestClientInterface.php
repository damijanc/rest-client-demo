<?php

namespace DataAccess;


interface RestClientInterface
{
    /**
     * @param $url
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($url);
}