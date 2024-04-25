<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    /* Estilos generales */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      align-items: center; /* Centra verticalmente */
      justify-content: space-between; /* Espacio entre el encabezado y el pie de página */
      position: relative; /* Establece un contexto de posición para los elementos absolutos */
      min-height: 100vh; /* Garantiza que el cuerpo al menos ocupe toda la altura de la ventana */
    }
  

    /* Estilos para el header */
    header {
      background-color: #0096d2; /* Mostaza oscuro */
      color: #fff;
      text-align: right;
      padding: 50px;
      width: 100%; /* Ocupa todo el ancho */
      position: fixed; /* Mantiene fijo el encabezado */
      top: 0; /* Fijado arriba */
    }

    header nav {
      margin-top: 5px;
      text-align: center;
    }

    header a {
      color: #4033d3;
      text-decoration: none;
      margin-right: 10px;
    }
    #imagen-fondo {
  position: absolute; /* Posicionamiento relativo al encabezado */
  top: 0;
  left: 0;
  width: 100%; /* Ocupa todo el ancho del encabezado */
  height: 100%; /* Ocupa toda la altura del encabezado */
  background-image: url("https://images8.alphacoders.com/476/thumb-1920-476725.jpg"); /* Reemplaza con la URL de tu imagen */
  background-size: cover; /* Cubre todo el fondo */
  background-position: center; /* Posición central */
  background-repeat: no-repeat; /* No repetir la imagen */
  z-index: -1; /* Coloca la imagen detrás del contenido del encabezado */
}

    /* Estilos para el contenido */
    main {
      text-align: center;
      padding: 20px;
      margin-top: 150px; /* Ajusta el margen superior para evitar que el contenido se superponga con el encabezado */
    }

    /* Estilos para el pie de página */
    footer {
      background-color: #0096d2; /* Mostaza oscuro */
      background-image: url("https://images8.alphacoders.com/476/thumb-1920-476725.jpg")
      color: #fff;
      text-align: center;
      padding: 50px;
      width: 100%; /* Ocupa todo el ancho */
      position: absolute; /* Permite que el pie de página permanezca abajo */
      bottom: 0; /* Fijado abajo */
    }

    footer nav {
      margin-top: 5px;
    }

    footer a {
      color: #fff;
      text-decoration: none;
      margin-right: 10px;
    }

    /* Estilos para los títulos */
    h1 {
      color: #0096d2; /* Fucsia */
    }

    /* Estilos para las tarjetas */
    .card-container {
      display: flex;
      flex-wrap: wrap; /* Ajusta el flujo de las tarjetas a varias líneas */
      justify-content: center; /* Centra las tarjetas horizontalmente */
      gap: 20px;
      padding: 0 20px; /* Añade un espacio a los lados del contenedor */
    }

    .card {
      width: 300px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease; /* Agrega una transición al transform */
    }

    .card:hover {
      transform: translateY(-10px); /* Levanta ligeramente la tarjeta al pasar el mouse */
    }

    .card img {
      width: 100%;
      height: auto;
    }

    .card-content {
      padding: 20px;
      text-align: center;
    }

    .button {
      display: block;
      margin-top: 20px;
      background-color: #0092d2; /* Color del encabezado */
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .button:hover {
      background-color: #0077b6; /* Cambia el color al pasar el mouse */
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="http://127.0.0.1:8000/AMED">SENATI</a>
      <a href="http://127.0.0.1:8000/free">LAMBORGHINI</a>
      <a href="http://127.0.0.1:8000/hola">CRISTHIANO</a>
      <a href="http://127.0.0.1:8000/cr7">MADRID</a>
      <a href="http://127.0.0.1:8000/anyelo">OBJETIVO</a>
    </nav>
  </header>

  <main>
    <div class="card-container">
      <div class="card">
        <a href="http://127.0.0.1:8000/AMED">
          <img src="https://1.bp.blogspot.com/-YhNsVmCDyPQ/WOmqepumBKI/AAAAAAAAAg0/ks1SEQ8JEVcKRhzGiBjOpfiKXOds_eA5ACLcB/s1600/home-bg-slider-img1.jpg">
        </a>
        <div class="card-content">
          <h3>ACTIVIDAD PERSONAL</h3>
          <p>ACTIVIDAD DIARIA</p>
        </div>
      </div>

      <div class="card">
        <a href="http://127.0.0.1:8000/free">
          <img src="https://c4.wallpaperflare.com/wallpaper/89/315/641/the-aventador-wallpaper-modified-by-aarif-wallpaper-thumb.jpg">
        </a>
        <div class="card-content">
          <h3>CARRO DEPORTIVO FAVORITO</h3>
          <p>EXPLICACION DEL CARRO</p>
        </div>
      </div>

      <div class="card">
        <a href="http://127.0.0.1:8000/hola">
          <img src="https://images8.alphacoders.com/476/thumb-1920-476725.jpg">
        </a>
        <div class="card-content">
          <h3>JUGADOR FAVORITO</h3>
          <p>CRISTIANO RONALDO</p>
        </div>
      </div>

      <div class="card">
        <a href="http://127.0.0.1:8000/cr7">
          <img src="https://wallpapercave.com/wp/wp1942299.jpg">
        </a>
        <div class="card-content">
          <h3>EQUIPO FAVORITO</h3>
          <p>REAL MADRID</p>
        </div>
      </div>

      <div class="card">
        <a href="http://127.0.0.1:8000/anyelo">
          <img src="https://www.techdim.com/wp-content/uploads/2023/07/AI-Powered-Phishing-Attacks-And-Identity-Theft.jpg">
        </a>
        <div class="card-content">
          <h3>OBJETIVO</h3>
          <p></p>
        </div>
      </div>
    </div>
    <a href="http://127.0.0.1:8000/" class="button">VOLVER AL INICIO</a>
  </main>
  
  <footer>
    <nav>
      <!-- Coloca aquí tus enlaces de pie de página si los tienes -->
    </nav>
  </footer>
</body>
</html>