<?php
namespace Kotchuprik\SmsRu\Client;

use Kotchuprik\SmsRu\Api\AbstractCall;
use Kotchuprik\SmsRu\Api\AbstractHttpCall;
use Kotchuprik\SmsRu\Exception\CurlException;

class HttpClient implements ClientInterface
{
    public function __construct()
    {
        if (!in_array('curl', get_loaded_extensions())) {
            throw new CurlException('CURL is not installed.');
        }
    }

    public function perform(AbstractCall $apiCall)
    {
        if (!$apiCall instanceof AbstractHttpCall) {
            throw new CurlException('This perform available only for AbstractHttpCall.');
        }

        $apiCall->getData();
        $response = null;

        $apiCall->processResponse($response);
    }
}
