<?php
namespace Kotchuprik\SmsRu\Api\StopList;

use Kotchuprik\SmsRu\Api\AbstractHttpCall;

class DelCall extends AbstractHttpCall
{
    public function getCallParams()
    {
    }

    public function getUrl()
    {
    }

    public function getResponseCodes()
    {
        return array(
            '100' => 'Номер удален из стоплиста.',
            '202' => 'Номер телефона в неправильном формате'
        );
    }

    public function processResponse($response)
    {
    }
}
