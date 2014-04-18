<?php
namespace kotchuprik\SmsRu\Api\StopList;

use kotchuprik\SmsRu\Api\AbstractHttpCall;

class GetCall extends AbstractHttpCall
{
    /** @var array */
    protected $phones;

    public function getCallParams()
    {
        return array();
    }

    public function getUrl()
    {
        return 'http://sms.ru/stoplist/get';
    }

    public function getResponseCodes()
    {
        return array(
            '100' => 'Запрос обработан',
            '202' => 'Номер телефона в неправильном формате',
        );
    }

    /**
     * @return array
     */
    public function getPhones()
    {
        return $this->phones;
    }

    protected function populateCall(array $data)
    {
        $phones = array();
        foreach ($data as $row) {
            list($phone, $note) = explode(';', $row);
            $phones[] = array($phone => $note);
        }

        $this->phones = $phones;
    }
}
