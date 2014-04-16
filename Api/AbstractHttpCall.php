<?php
namespace kotchuprik\SmsRu\Api;

abstract class AbstractHttpCall extends AbstractCall
{
    /** @var int */
    protected $responseCode;

    /** @var string */
    protected $responseDescription;

    abstract public function getResponseCodes();

    abstract public function processResponse($response);

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return string
     */
    public function getResponseDescription()
    {
        return $this->responseDescription;
    }

    public function isSuccess()
    {
        return $this->responseCode == 100;
    }
}
