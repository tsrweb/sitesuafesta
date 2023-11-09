<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$corpo = "

<h1><b>Contato Sua Festa: </b></h1><hr>

".$msg."<br /><br />

Para responder utilize o seguinte email: ".$email."

<hr>
";

$para = "contato@tsrweb.com.br";
$assunto = "Contato Sua Festa";
$menssagem = $corpo;
$cabecalho = "MIME-Version: 1.0" . "\r\n";
$cabecalho .= "Content-type: text/html; charset=ISO 8859-1" . "\r\n";
$cabecalho .= "from: Ideal Software<contato@tsrweb.com.br>" . "\r\n";
mail($para, $assunto, $menssagem, $cabecalho);

echo '<script type="text/javascript">alert("Mensagem enviada!");window.location=("index.html");</script>';

?>