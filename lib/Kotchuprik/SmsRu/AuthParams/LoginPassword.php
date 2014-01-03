<?php
namespace Kotchuprik\SmsRu\AuthParams;

class LoginPassword implements AuthParamsInterface
{
    protected $login;
    protected $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
}
