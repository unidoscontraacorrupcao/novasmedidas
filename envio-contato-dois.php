<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<div style="display: none;">
  <script> location.replace("http://unidoscontraacorrupcao.org.br/index.html?mensagemdois=okdois#okRespForm"); </script>

<?php
$Vai    = "<meta http-equiv='content-type' content='text/html; charset=utf-8'><table width='70%' border='0' align='center' cellspacing='0' cellpadding='0' style='font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; float:left; border:1px solid #666666; margin-right:5%; margin-bottom: 5%; font-size: 10px; margin: 0 auto; border='1'>
  <tbody>
    <tr>
      <td><table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' style=' margin: 0 auto;'>
          <tbody>
            <tr>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Nome:</strong>  ".$_POST["nome"]."  </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Email:</strong> ".$_POST["email"]." </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>".$_POST["aceiteum"]." </td>
            </tr>
           <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
                <tr>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>";

require_once("mailer/class.phpmailer.php");

define('GUSER', 'assine.unidoscontraacorrupcao@gmail.com ');  // <-- Insira aqui o seu GMail
define('GPWD', 'transparencia2018');    // <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
  global $error;
  $mail = new PHPMailer();
  $mail->charSet = "8859-1";
  $mail->IsSMTP();    // Ativar SMTP
  $mail->IsHTML(true);
  $mail->SMTPDebug = 2;   // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
  $mail->SMTPAuth = true;   // Autenticação ativada
  $mail->SMTPSecure = 'tls';  // SSL REQUERIDO pelo GMail
  $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
  $mail->Port = 587;      // A porta 587 deverá estar aberta em seu servidor
  $mail->Username = GUSER;
  $mail->Password = GPWD;
  $mail->SetFrom($de, $de_nome);
  $mail->Subject = $assunto;
  $mail->Body = $corpo;
  $mail->AddAddress($para);
  if(!$mail->Send()) {
    $error = 'Mail error: '.$mail->ErrorInfo;
    return false;
  } else {
    $error = 'Mensagem enviada!';
    return true;
  }
}




if (smtpmailer('assine.unidoscontraacorrupcao@gmail.com ', $_POST["email"], 'As Novas Medidas', 'Assinatura pelo Site 2', $Vai)) {
  ?>
  <script> location.replace("http://unidoscontraacorrupcao.org.br/index.html?mensagemdois=okdois#okRespForm"); </script>
  <?php
}else{
  ?>
  <script> location.replace("http://unidoscontraacorrupcao.org.br/index.html?mensagemdois=errordois#okRespForm"); </script>
   <?php
}
?>
</div>
