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

    abstract public function getData();

    abstract public function isSuccess();
}
