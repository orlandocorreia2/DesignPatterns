<?php

require_once 'SMTPSettings.php';
require_once 'Mail.php';
require_once 'MailFormatTXT.php';
require_once 'MailFormatHTML.php';
require_once 'MailMessage.php';

class MailFacade
{
    private $mail;
    private $mail_format;
    private $smtpSettings;
    private $message;

    public function __construct()
    {
        $this->smtpSettings = new SMTPSettings('smpt.gmail.com', '123', 'default');
        $this->mail = new Mail($this->smtpSettings);
        $this->mail_format = new MailFormatTXT();
        $this->message = new MailMessage($this->mail_format);
    }

    public function send($message)
    {
        $this->message->setMessage($message);
        $this->mail->send($this->message);
    }
}