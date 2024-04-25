<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Personal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            width: 80%;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .button {
            display: inline-block;
            padding: 15px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Actividad Personal</h2>
    
    <?php
// Configuración de la conexión a la base de datos
$servername = ""; // Cambia esto si tu servidor de MySQL tiene un nombre diferente
$username = "root";
$password = "";
$dbname = "LOGIN1";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesa los datos del formulario
    $titulo = $conn->real_escape_string($_POST["titulo"]);
    $contenido = $conn->real_escape_string($_POST["contenido"]);

    // Prepara y ejecuta la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO actividades_personales (titulo, contenido) VALUES ('$titulo', '$contenido')";
    if ($conn->query($sql) === TRUE) {
        echo "<h3>Los datos se han guardado correctamente en la base de datos.</h3>";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
}

// Cierra la conexión
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Estilos CSS -->
</head>
<body>
    <h2>Login</h2>
    
    <!-- Formulario de inicio de sesión -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario"><br><br>

        <label for="contraseña">Contraseña:</label><br>
        <input type="password" id="contraseña" name="contraseña"><br><br>

        <input type="submit" value="Iniciar Sesión">
    </form>

    <!-- Mostrar mensaje de error si existe -->
    <?php if(isset($mensaje_error)) { ?>
        <p><?php echo $mensaje_error; ?></p>
    <?php } ?>
</body>
</html>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" value="Actividad Personal" readonly><br><br>

        <label for="contenido">Actividades diarias:</label><br>
        <textarea id="contenido" name="contenido" rows="4" cols="50" readonly>Soy estudiante de la institución Tecnológica de Senati: La mayor parte de mi vida la paso en las prácticas, clases en la institución y en mis clases de inglés. En mis tiempos libres juego videojuegos como Free Fire y fútbol online. Los fines de semana juego al fútbol entre amigos y otras personas. Eso es lo que realizo todos los días.</textarea><br><br>

        <!-- Eliminado el botón de enviar y agregado el enlace al menú principal -->
        <a href="http://127.0.0.1:8000/menu" class="button">Volver al Menú Principal</a>
    </form>
</body>
</html>

