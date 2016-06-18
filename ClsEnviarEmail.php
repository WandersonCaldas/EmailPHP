<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("phpmailer/class.phpmailer.php");
require('phpmailer/PHPMailerAutoload.php');

class ClsEnviarEmail {

    public function EnviarEmail($destinatario, $assunto, $mensagem) 
    {                
        $de = "";
        $nome = "Wanderson";
        
        try
        {                                                                                 
            
            // Inicia a classe PHPMailer
            $mail = new PHPMailer();
            // Define os dados do servidor e tipo de conexão
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = ""; // Endereço do servidor SMTP
            $mail->Port = 587;
            $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
            //$mail->SMTPSecure = 'tls';
            $mail->Username = ""; // Usuário do servidor SMTP
            $mail->Password = ""; // Senha do servidor SMTP
            $mail->SMTPDebug  = 1;
            // Define o remetente
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->From = $de; // Seu e-mail
            $mail->FromName = $nome; // Seu nome
            // Define os destinatário(s)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddAddress('fulano@dominio.com.br', 'Fulano da Silva');
            $mail->AddAddress($destinatario);
            //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
            //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
            // Define os dados técnicos da Mensagem
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
            // Define a mensagem (Texto e Assunto)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->Subject  = $assunto; // Assunto da mensagem
            $mail->Body = $mensagem; //"Este é o corpo da mensagem de teste, em <b>HTML</b>!  :)";
            //$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
            // Define os anexos (opcional)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
            // Envia o e-mail
            $mail->Send();
            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            header("location: index.php");
            
        } 
        catch (Exception $ex) {
            echo($ex->getMessage());
        }        
    }                 
}

