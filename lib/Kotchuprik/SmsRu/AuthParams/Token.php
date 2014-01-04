<?php
namespace Kotchuprik\SmsRu\AuthParams;

class Token implements AuthParamsInterface
{
    protected $login;
    protected $password;
    protected $apiId;
    protected $token;

    public function __construct($login, $password, $apiId = null)
    {
        $this->login = $login;
        $this->password = $password;
        $this->apiId = $apiId;
        $this->token = file_get_contents('http://sms.ru/auth/get_token');
    }

    /**
     * @return array
     */
    public function getData()
    {
    }

    public function getResponseCodes()
    {
        return array(
            '100' => 'ОК, номер телефона и пароль совпадают.',
            '300' => 'Неправильный token (возможно истек срок действия, либо ваш IP изменился)',
            '301' => 'Неправильный пароль, либо пользователь не найден',
            '302' => 'Пользователь авторизован, но аккаунт не подтвержден (пользователь не ввел код, присланный в регистрационной смс)',
        );
    }
}
