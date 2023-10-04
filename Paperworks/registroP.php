<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Profesores</title>
    <link rel="stylesheet" type="text/css" href="css/registroP.css">
    <link rel="icon" href="./img/icono.png" type="image/png">
</head>
<body style="background-image: url(./img/FondoRegistro.png);background-repeat: no-repeat;background-size: cover;">

    <div class="container">
        <header>
            <h1>Registro Profesores</h1>
        </header>

        <main>
            <form id="registration-form">
                <label for="full-name">Nombre completo:</label>
                <input type="text" id="full-name" name="full-name" required>
                
                <label for="dni">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
                
                <a href="pgexterna.php" target="_blank">
                <button type="submit">Ingresar</button>
            </form>
        </main>

    <script src="js/registroP.js"></script>
</body>
</html>