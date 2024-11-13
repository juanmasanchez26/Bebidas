<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <title>Página de Carga</title>
    <style>



:root{
  --color-ppal: black;
  --color-sec: white;
  --color-ter: #ff4500;
  }

  .body {
            background-color: var(--color-ppal);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            height: 100vh; /* Asegura que el cuerpo ocupe toda la altura de la ventana */
        }

        #logo {
            max-width: 25%;
            height: auto;
            margin-top: 20px;
            padding: 10px 20px;
        }
    </style>
</head>
<body class="body">

    <img src="Imagenes/logo-naranja.png" alt="Tu Marca Fitness" id="logo">
</body>
</html>

    <script>
        setTimeout(function() {
            window.location.href = "inicio.php"; // Redirige a la página de inicio después de unos segundos
        }, 3000); // Cambia este valor a la cantidad de milisegundos que desees (3 segundos en este ejemplo)
    </script>
</body>
</html>
