<?php
session_start();
unset($_SESSION["nome"]);
unset($_SESSION["logado"]);
header("Location: index.php");
?>