<?php
namespace Kotchuprik\SmsRu;

use Kotchuprik\SmsRu\Api\AbstractCall;
use Kotchuprik\SmsRu\AuthParams\AuthParamsInterface;
use Kotchuprik\SmsRu\Client\ClientInterface;

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
