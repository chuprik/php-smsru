<?php
namespace Kotchuprik\SmsRu\Client;

use Kotchuprik\SmsRu\Api\AbstractCall;

interface ClientInterface
{
    /**
     * @param AbstractCall $apiCall
     */
    public function perform(AbstractCall $apiCall);
}
