<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.css" />
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.js"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3123476761490260"
     crossorigin="anonymous"></script>
  <style>
    :root {
      --color-ppal: black;
      --color-sec: white;
      --color-ter: #ff5400;
 
    }

    * {
      font-family: 'Lexend', sans-serif;
      font-weight: bold;
      font-size: 22px;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: var(--color-ppal);
      font-family: Arial, sans-serif;
      transition: background-color 0.3s, color 0.3s;

    }

    header {
      background-color: var(--color-ppal);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px 20px;
    }


    header h1 {
      color: var(--color-sec);
    }

    header a {
      text-decoration: none;
    }



    .logo {
      width: 75px;
    }


    nav {
      text-align: center;
    }


    .nav-item {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s, transform 0.5s;
    }

    .nav-item.animate {
      opacity: 1;
      transform: translateY(0);
    }

    ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    li {
      display: inline-block;
      margin-right: 10px;
      margin-left: 10px;
    }

    a {
      text-decoration: none;
      color: var(--color-sec);
      font-size: 18px;
      cursor: pointer;
      position: relative;
      transition: color 0.3s, border-bottom 0.3s;
    }

    a:hover {
      color: var(--color-ter);
      border-bottom: 2px solid var(--color-ter);
    }

   

    @media only screen and (max-width: 768px) {
     

      nav {
        text-align: center;
        align-items: center;
      }


      .nav-item {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s, transform 0.5s;
      }

      .nav-item.animate {
        opacity: 1;
        transform: translateY(0);
      }

      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      li {
        display: inline-block;
        margin-right: 0px;
      }

      .btnMenu {
        text-decoration: none;
        color: var(--color-sec);
        font-size: 14px;
        cursor: pointer;
        position: relative;
        transition: color 0.3s, border-bottom 0.3s;
      }

    }
  </style>
</head>

<body>

  <header>
    
    <nav>
      <ul>
        <li class="nav-item" data-aos="fade-up"> <a class="btnMenu" href="inicio.php">Inicio</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="btnMenu" href="bebidas.php">Cocteles</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="btnMenu" href="historia.php">Historia</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="btnMenu" href="ruleta.php">Ruleta</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="btnMenu" href="contacto.php">Contacto</a></li>
      </ul>
    </nav>



    <script>
    AOS.init();

    AOS.init({
      duration: 800,  // Animation duration in milliseconds
    });
  </script>

  </header>



