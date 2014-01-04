<?php
namespace Kotchuprik\SmsRu\Api\StopList;

use Kotchuprik\SmsRu\Api\AbstractHttpCall;

class AddCall extends AbstractHttpCall
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
            '100' => 'Номер добавлен в стоплист.',
            '202' => 'Номер телефона в неправильном формате',
        );
    }

    public function processResponse($response)
    {
    }
}
