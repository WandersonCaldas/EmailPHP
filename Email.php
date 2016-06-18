<?php
include("ClsEnviarEmail.php");

$assunto = $_REQUEST['assunto'];
$destinatario = $_REQUEST['destino'];
$mensagem = $_REQUEST['mensagem'];

$email = new ClsEnviarEmail();

$email->EnviarEmail($destinatario, $assunto, $mensagem);
