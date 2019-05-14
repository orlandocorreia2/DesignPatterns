<?php

require_once 'Creator.php';
require_once 'AuthenticationGoogle.php';

class GoogleCreator extends Creator
{
    public function createInstance(): Authentication
    {
        return new AuthenticationGoogle();
    }
}