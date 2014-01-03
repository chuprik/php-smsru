<?php
namespace Kotchuprik\SmsRu\Api;

abstract class AbstractHttpCall extends AbstractCall
{
    protected $responseCode;

    protected $responseDescription;

    abstract public function getResponseCodes();

    abstract public function processResponse($response);

    public function isSuccess()
    {
        return $this->responseCode == 100;
    }
}
