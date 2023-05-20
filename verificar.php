<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'usuarios';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die('Erro ao conectar: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['autenticado'] = true;
        header('Location: listar.php');
        exit();
    } else {
        $erro = 'Usuário ou senha incorretos';
        setcookie('erro', $erro, time() + 3600, '/');
        header('Location: download.php');
        exit();
    }
}

mysqli_close($conn);
?>
