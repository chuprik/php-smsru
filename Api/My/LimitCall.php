<?php
namespace kotchuprik\SmsRu\Api\My;

use kotchuprik\SmsRu\Api\AbstractHttpCall;

class LimitCall extends AbstractHttpCall
{
    /** @var int */
    protected $total;

    /** @var int */
    protected $today;

    public function getCallParams()
    {
        return array();
    }

    public function getUrl()
    {
        return 'http://sms.ru/my/limit';
    }

    public function getResponseCodes()
    {
        return array(
            '100' => 'Запрос выполнен',
            '200' => 'Неправильный api_id',
            '210' => 'Используется GET, где необходимо использовать POST',
            '211' => 'Метод не найден',
            '220' => 'Сервис временно недоступен, попробуйте чуть позже.',
            '300' => 'Неправильный token (возможно истек срок действия, либо ваш IP изменился)',
            '301' => 'Неправильный пароль, либо пользователь не найден',
            '302' => 'Пользователь авторизован, но аккаунт не подтвержден (пользователь не ввел код, присланный в регистрационной смс)',
        );
    }

    /**
     * @return int
     */
    public function getToday()
    {
        return $this->today;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    protected function populateCall(array $data)
    {
        $this->total = (int)$data[0];
        $this->today = (int)$data[1];
    }
}
