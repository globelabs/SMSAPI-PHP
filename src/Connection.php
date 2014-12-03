<?php namespace GlobeLabs\SmsApi;

use GuzzleHttp\Client;

class Connection {

    /**
     * Guzzle Client
     *
     * @var Client
     */
    protected $client;

    /**
     * Class constructor
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

}
