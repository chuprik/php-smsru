<?php
namespace Kotchuprik\SmsRu\Api\StopList;

use Kotchuprik\SmsRu\Api\AbstractHttpCall;

class GetCall extends AbstractHttpCall
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
            '100' => 'Запрос обработан. На последующих строчках будут идти номера телефонов, указанных в стоплисте в формате номер;примечание.',
        );
    }

    public function processResponse($response)
    {
    }
}
