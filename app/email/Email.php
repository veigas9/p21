<?php

namespace App\email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Email
{
    /**
     * CREDENCIAIS DE ACEESO SMTP
     */
    const HOST = 'smtp.mailtrap.io';
    const USER = '204962b386771a';
    const PASS = '6f302c5a1fc368';
    const SECURE = 'TLS/SSL';
    const PORT = '2525';
    const CHARSET = 'UTF-8';

    /**
     * REMETENTE
     */
    const FROM_EMAIL = 'atendimento@p21.com.br';
    const FROM_NAME = 'atendimento';

    /**
     * MENSAGEM DE ERRO
     *
     * @var string
     */
    private string $error;

    public function getError()
    {
        return $this->error;
    }

    public function sendEmail($addresses, $subject, $body)
    {
        $this->error = '';
        //ISTANCIA DE PHPMAILER
        $objMail = new PHPMailer(true);
        try {
            $objMail->isSMTP(true);
            $objMail->Host = self::HOST;
            $objMail->SMTPAuth = true;
            $objMail->Username = self::USER;
            $objMail->Password = self::PASS;
            $objMail->SMTPSecure = self::SECURE;
            $objMail->Port = self::PORT;
            $objMail->CharSet = self::CHARSET;

            //REMETENTE
            $objMail->setFrom(self::FROM_EMAIL, self::FROM_NAME);

            //DESTINATARIOS
            $addresses = is_array($addresses) ? $addresses : [$addresses];

            foreach ($addresses as $address) {
                $objMail->addAddress($address);
            }

            //CONTEUDO DO HTML
            $objMail->isHTML(true);
            $objMail->Subject = $subject;
            $objMail->Body = $body;

            return $objMail->send();
        } catch (PHPMailerException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}
