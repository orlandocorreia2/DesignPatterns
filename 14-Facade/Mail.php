<?php

require_once 'MailMessage.php';

class Mail
{
    private $smtpSettings;

    public function __construct(SMTPSettings $smtpSettings)
    {
        $this->smtpSettings = $smtpSettings;
    }

    public function send(MailMessage $mailMessage)
    {
        echo 'Enviando mensagem... <br/> '.$mailMessage->getMessage().' <br/>';
    }
}