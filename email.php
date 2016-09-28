<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "domingos@domingosexpress.com.br";
$subject = "E-mail enviado pelo site - Assunto: ".$subject;
$message = "O usuário ".$name." (".$email.") enviou a seguinte mensagem pelo site:\n\n".$message;

$result = mail($to, $subject, $message);

if($result) $msg = "E-mail enviado com sucesso.<br/>Em breve entraremos em contato!";
else $msg = "N&atilde;o foi poss&iacute;vel enviar o e-mail no momento.<br/>Tente novamente em alguns minutos.";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Domingos Express Transportes</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body>
<div id="container">
	<div id="header">
		<div><a href="index.html"><img src="images/logo.png" alt="" /></a></div>
		<h1><strong>Domingos Express Transportes</strong></h1>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="index.html">Empresa</a></li>
            <li><a href="atuacao.html">Atua&ccedil;&atilde;o</a></li>
            <li><a href="seguranca.html">Seguran&ccedil;a</a></li>
            <li><a href="frota.html">Frota</a></li>
            <li class="selected"><a href="contato.html">Contato</a></li>
        </ul>
    </div>

    <div id="body">
		<div id="contentEmailSuccess">
			<p><?php echo $msg ?></p>
        </div>
        
    	<div class="clear"></div>
    </div>
    <div id="footer">
        <div class="footer-bottom">
            <p>&copy; 2014 Domingos Express. Todos direitos reservados.</p>
         </div>
    
    </div>
</div>
</body>
</html>