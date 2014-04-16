<?php
namespace kotchuprik\SmsRu;

use kotchuprik\SmsRu\Api\AbstractCall;
use kotchuprik\SmsRu\AuthParams\AuthParamsInterface;
use kotchuprik\SmsRu\Client\ClientInterface;

class Connector
{
    /** @var AuthParamsInterface */
    protected $authParams;

    /** @var ClientInterface */
    protected $client;

    public function __construct(AuthParamsInterface $authParams, ClientInterface $client)
    {
        $this->authParams = $authParams;
        $this->client = $client;
    }

    public function call(AbstractCall $apiCall)
    {
        $apiCall->setAuthParams($this->authParams);

        $this->client->perform($apiCall);
    }
}
