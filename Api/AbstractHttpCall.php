<?php
namespace kotchuprik\SmsRu\Api;

abstract class AbstractHttpCall extends AbstractCall
{
    const SUCCESS_CODE = 100;

    /** @var int */
    protected $responseCode;

    /** @var string */
    protected $responseDescription;

    abstract public function getResponseCodes();

    public function processResponse($response)
    {
        $parsed = explode(PHP_EOL, $response);
        $codes = $this->getResponseCodes();
        $this->responseCode = $parsed[0];
        $this->responseDescription = $codes[$this->responseCode];

        if ($this->responseCode == self::SUCCESS_CODE) {
            unset($parsed[0]);
            $this->populateCall($parsed);
        }
    }

    abstract protected function populateCall(array $data);

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
