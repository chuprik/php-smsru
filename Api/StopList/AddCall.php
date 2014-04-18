<?php
namespace kotchuprik\SmsRu\Api\StopList;

use kotchuprik\SmsRu\Api\AbstractHttpCall;

class AddCall extends AbstractHttpCall
{
    /** @var string */
    protected $phone;

    /** @var string */
    protected $note;

    public function getCallParams()
    {
        return array(
            'stoplist_phone' => $this->phone,
            'stoplist_text' => $this->note,
        );
    }

    public function getUrl()
    {
        return 'http://sms.ru/stoplist/add';
    }

    public function getResponseCodes()
    {
        return array(
            '100' => 'Номер добавлен в стоплист',
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

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    protected function populateCall(array $data)
    {
    }
}
