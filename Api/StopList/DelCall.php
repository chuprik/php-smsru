<?php
namespace kotchuprik\SmsRu\Api\StopList;

use kotchuprik\SmsRu\Api\AbstractHttpCall;

class DelCall extends AbstractHttpCall
{
    /** @var string */
    protected $phone;

    public function getCallParams()
    {
        return array(
            'stoplist_phone' => $this->phone,
        );
    }

    public function getUrl()
    {
        return 'http://sms.ru/stoplist/del';
    }

    public function getResponseCodes()
    {
        return array(
            '100' => 'Номер удален из стоплиста',
            '202' => 'Номер телефона в неправильном формате',
        );
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    protected function populateCall(array $data)
    {

    }
}
