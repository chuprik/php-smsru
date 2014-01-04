<?php
namespace Kotchuprik\SmsRu\Api;

use Kotchuprik\SmsRu\AuthParams\AuthParamsInterface;

abstract class AbstractCall
{
    /** @var AuthParamsInterface */
    protected $authParams;

    /**
     * @param AuthParamsInterface $authParams
     */
    public function setAuthParams(AuthParamsInterface $authParams)
    {
        $this->authParams = $authParams;
    }

    public function getData()
    {
        return array_merge($this->authParams->getData(), $this->getCallParams());
    }

    abstract public function getCallParams();

    abstract public function getUrl();

    abstract public function isSuccess();
}
