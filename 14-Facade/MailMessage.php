<?php

class MailMessage
{
    private $message;
    private $mailFormat;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function __construct(MailFormat $mailFormat, $message = null)
    {
        //Formatar mensagem
        $this->mailFormat = $mailFormat;
        $this->message = $message;
    }
}