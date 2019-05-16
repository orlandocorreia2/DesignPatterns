<?php

require_once 'MailFacade.php';

$mail = new MailFacade();
$mail->send('Olá mundo');