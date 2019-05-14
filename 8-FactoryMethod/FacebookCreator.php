<?php

require_once 'Creator.php';
require_once 'AuthenticationFacebook.php';

class FacebookCreator extends Creator
{
    public function createInstance(): Authentication
    {
        return new AuthenticationFacebook();
    }
}