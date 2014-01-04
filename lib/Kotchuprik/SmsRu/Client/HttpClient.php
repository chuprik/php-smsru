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

        $curlHandler = curl_init($apiCall->getUrl());

        curl_setopt($curlHandler, CURLOPT_POST, true);
        curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $apiCall->getData());
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, 0);

        ob_start();
        if (!curl_exec($curlHandler)) {
            throw new CurlException('Error while performing request (' . curl_error($curlHandler) . ').');
        }
        $response = ob_get_contents();
        ob_end_clean();

        curl_close($curlHandler);
        if (trim($response) === '') {
            throw new CurlException('No response was received from the server.');
        }

        $apiCall->processResponse($response);
    }
}
