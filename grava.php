<?php
$servername = "signups.mysql.dbaas.com.br";
$username = "signups";
$password = "p@Go5IzX";
$dbname = "signups";

date_default_timezone_set('America/Sao_Paulo');
$agora = date("Y-m-d H:i:s");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signups (Nome, Email, Optin, Privacy, User, Data)
VALUES ('$nome', '$email', '$optin', '$privacy', '$user', '$agora')";

if ($conn->query($sql) === TRUE) {
    header("Location: https://unidoscontraacorrupcao.org.br/index.html?mensagem=ok#contatos");
} else {
    header("Location: https://unidoscontraacorrupcao.org.br/index.html?mensagem=error#contatos");
}

$conn->close();

?>
