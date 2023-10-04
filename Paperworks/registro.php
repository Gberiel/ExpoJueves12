<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="css/registroP.css">
    <link rel="icon" href="./img/icono.png" type="image/png">
</head>
<body style="background-image: url(./img/FondoRegistro.png);background-repeat: no-repeat;background-size: cover;">

    <div class="container">
        <header>
            <h1>Registro Alumno</h1>
        </header>
    

        <main>
            <form action="" method="POST">
                <label>Usuario:</label>
                <input type="text" name="usuario" required>

                <label>Contraseña:</label>
                <input type="password" name="contraseña" required>
                
                <?php
                

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $conexion = mysqli_connect("localhost", "root", "", "dataworks");

                    if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
                        $usuario = $_POST['usuario'];
                        $contraseña = $_POST['contraseña'];

                        // Verificar en la tabla "Inicio Sesion"
                        $query_inicio = mysqli_query($conexion, "SELECT * FROM inicio_sesion WHERE usuario = '$usuario' AND contraseña = '$contraseña'");
                        $nr_inicio = mysqli_num_rows($query_inicio);

                        // Verificar en la tabla "Inicio Usuario"
                        $query_usuarios = mysqli_query($conexion, "SELECT * FROM inicio_usuario WHERE usuario = '$usuario' AND contraseña = '$contraseña'");
                        $nr_usuarios = mysqli_num_rows($query_usuarios);

                        if ($nr_inicio == 1) {
                            header("Location: pgexterna.php"); 
                        } elseif ($nr_usuarios == 1) {
                            header("Location: edit_pgexterna.php");
                        } else {
                            echo "Usuario o Contraseña incorrecta";
                        }
                    }
                }
                ?>

                <button type="submit" name="databoton">Enviar</button>
            </form>
        </main>
    </div>
</body>
</html>
