<?php
namespace Kotchuprik\SmsRu\AuthParams;

class Token implements AuthParamsInterface
{
    //@TODO get token by file_get_contents

    protected $login;
    protected $password;
    protected $apiId;
    protected $token;

    public function __construct($login, $password, $apiId = null)
    {
        
    }
}
