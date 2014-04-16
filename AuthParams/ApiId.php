<?php
namespace kotchuprik\SmsRu\AuthParams;

class ApiId implements AuthParamsInterface
{
    protected $apiId;

    public function __construct($apiId)
    {
        $this->apiId = $apiId;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return array(
            'api_id' => $this->apiId,
        );
    }
}
