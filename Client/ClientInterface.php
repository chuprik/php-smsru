<?php
namespace kotchuprik\SmsRu\Client;

use kotchuprik\SmsRu\Api\AbstractCall;

interface ClientInterface
{
    /**
     * @param AbstractCall $apiCall
     */
    public function perform(AbstractCall $apiCall);
}
