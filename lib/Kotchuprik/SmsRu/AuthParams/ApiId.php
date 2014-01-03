<?php
namespace Kotchuprik\SmsRu\AuthParams;

class ApiId implements AuthParamsInterface
{
    protected $apiId;

    public function __construct($apiId)
    {
        $this->apiId = $apiId;
    }
}
