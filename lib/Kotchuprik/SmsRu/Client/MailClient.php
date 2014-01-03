<?php
namespace Kotchuprik\SmsRu\Client;

use Kotchuprik\SmsRu\Api\AbstractCall;

class MailClient implements ClientInterface
{
    /**
     * @param AbstractCall $apiCall
     *
     * @throws \Exception
     */
    public function perform(AbstractCall $apiCall)
    {
        if (!$apiCall instanceof \Kotchuprik\SmsRu\Api\Sms\MailCall) {
            throw new \Exception('This client can\'t perform this Call.');
        }
    }
}
