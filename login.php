<?php
// login.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica las credenciales (esto es un ejemplo básico, debes usar métodos seguros)
    if ($username === "usuario" && $password === "contraseña") {
        // Credenciales válidas, redirige a la página de bienvenida (por ejemplo, welcome.php)
        header("Location: nostro.html");
        exit();
    } else {
        // Credenciales incorrectas, maneja la situación
        echo "Credenciales incorrectas";
    }
}
?>