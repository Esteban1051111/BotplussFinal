<?php
// login.php
// Aquí procesas los datos enviados desde el formulario de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Aquí puedes agregar la lógica de autenticación, por ejemplo, verificar en la base de datos

    if ($usuario === 'admin' && $contraseña === 'password') { // Ejemplo simple de autenticación
        echo 'Inicio de sesión exitoso';
        
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
} else {
    // Redirigir al formulario de login si se accede directamente a este script
    header('Location: /public/html/index.html');
    exit();
}
?>
