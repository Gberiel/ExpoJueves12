<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel= "stylesheet" type="text/css" href="./css/pagext.css"/>
    <link rel= "stylesheet" type="text/css" href="./css/paicor.css"/>
    <link rel="icon" href="./img/icono.png" type="image/png">
</head>

<body>
    <header>    
        <div class="cabecera">
            <img class="logo" src="./img/logo.png"  alt="logo">
            <h1>IPET N°363</h1>
        </div>
    </header>

    
    <div id="header">
        <ul class="nav" style="display: inline-flex;;">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="papeles.php">Papeles</a></li>

            <li>
                <a href="">Horarios</a>
                <ul>
                    <li><a href="cursos.php">Cursos</a></li>
                    <li><a href="colectivos.php">Colectivos</a></li>
                    <li><a href="tutorias.php">Tutorias</a></li>
                </ul>
            </li>

            <li><a href="https://cidi.cba.gov.ar/portal-publico/">Notas</a></li>
            <li><a href="asistencias.php">Asistencias</a></li>
            <li><a href="paicor.php">Paicor</a></li>
            <li><a href="comunicados.php">Comunicados</a></li>
        </ul>
    </div>

    <main>
        <form id="search-form">
            <label for="document-id">Ingresa tu nombre :</label>
            <input type="text" id="document-id" name="document-id" required>
            <button type="submit">Buscar</button>
        </form>

        <div id="results-container">
            <!-- Aquí se mostrarán los resultados de la búsqueda -->
        </div>
    </main>

    <script src="./js/paicor.js"></script>

    <footer class="footer">
        <div class="content">
            <p>TEL: 4918432</p>
            <p>|</p>
            <p>Horarios de atención:</p>
            <p>7:10 a 12:55.</p>
            <p>|</p>
            <p>13:30 a 19:15.</p>
        </div>
    </footer>
    
</body>
</html>