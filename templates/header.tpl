<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="src/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="src/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="src/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="src/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="src/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="src/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="src/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="src/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="src/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="src/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="src/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicons/favicon-16x16.png">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Noticias</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Link siempre al index -->
            <a class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <!-- Menú al lado derecho -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menú
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="admin.php?action=view_periodistas">Periodistas</a></li>
                            <li><a class="dropdown-item" href="admin.php?action=view_noticias">Noticias</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
</nav>