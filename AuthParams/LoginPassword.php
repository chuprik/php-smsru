<?php
namespace kotchuprik\SmsRu\AuthParams;

class LoginPassword implements AuthParamsInterface
{
    protected $login;
    protected $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return array(
            'login' => $this->login,
            'password' => $this->password,
        );
    }
}
