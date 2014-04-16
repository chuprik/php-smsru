<?php
namespace kotchuprik\SmsRu\Api\My;

use kotchuprik\SmsRu\Api\AbstractHttpCall;

class SendersCall extends AbstractHttpCall
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
            '100' => 'Запрос выполнен. На второй и последующих строчках вы найдете ваших одобренных отправителей, которые можно использовать в параметре &from= метода sms/send.',
            '200' => 'Неправильный api_id',
            '210' => 'Используется GET, где необходимо использовать POST',
            '211' => 'Метод не найден',
            '220' => 'Сервис временно недоступен, попробуйте чуть позже.',
            '300' => 'Неправильный token (возможно истек срок действия, либо ваш IP изменился)',
            '301' => 'Неправильный пароль, либо пользователь не найден',
            '302' => 'Пользователь авторизован, но аккаунт не подтвержден (пользователь не ввел код, присланный в регистрационной смс)'
        );
    }

    public function processResponse($response)
    {
    }
}
