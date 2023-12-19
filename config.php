<?php
    $host = "localhost";
    $database = "nando";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Falha ao conectar. Erro: " . mysqli_connect_error());
    }
?>