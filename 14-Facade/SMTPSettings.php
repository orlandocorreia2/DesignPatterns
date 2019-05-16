<?php

class SMTPSettings
{
    public $server_name;
    public $user_name;
    public $password;

    public function __construct($server_name = '', $user_name = '', $password = '')
    {
        $this->server_name = $server_name;
        $this->user_name =$user_name;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getServerName()
    {
        return $this->server_name;
    }

    /**
     * @param $server_name
     */
    public function setServerName($server_name)
    {
        $this->server_name = $server_name;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}