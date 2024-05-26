

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/header.css">
    <link rel="stylesheet" href="../../assets/css/inform.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Constructora Las Galias - Graficas</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php include '../../templates/header.php'; ?>
    
    <main style="margin-top: 70px;"> <!-- Añade un margen superior para evitar la superposición del header -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <img src="../../public/img/Graficos.png" alt="Logo 1">
                        <span>Modulo de Graficas</span>
                    </a>
                </li>
                <!-- Más elementos de la lista según sea necesario -->
            </ul>
        </div>
        <div class="content">
            <div class="button-container">
                <button onclick="window.location.href='pagina1.html'" class="submit-button blue large">Radicacion</button>
                <button onclick="window.location.href='pagina2.html'" class="submit-button blue large">Informes</button>
                <button onclick="window.location.href='pagina3.html'" class="submit-button blue large">Graficas</button>
                <button onclick="window.location.href='pagina4.html'" class="submit-button blue large">Proyectos</button>
            </div>
        </div>
    </main>

    <?php include '../../public/html/constructora/home.html'; ?>
    <?php include '../../templates/footer.php'; ?>
</body>
</html>
