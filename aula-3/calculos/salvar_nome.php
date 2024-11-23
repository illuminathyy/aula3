<?php
session_start();

if (isset($_POST['nome'])) {
    $_SESSION['nome'] = $_POST['nome'];
    header("Location: mostrar_nome.php");
    exit();
}
