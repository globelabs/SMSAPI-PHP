<?php namespace Globe\SmsApi;

use GlobeLabs\SmsApi\Connection;

class Sms {

    /**
     * Connection class container
     *
     * @var Container
     * @access protected
     */
    protected $connection;

    /**
     * Response from the API
     *
     * @var Object
     */
    protected $response;

    /**
     * Class constructor
     *
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

}
