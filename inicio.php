<?php
include("header.php");
?>
<style>

  .imagen-seccion {
        position: relative;
        text-align: center;
        background-color: var(--color-ppal);
        padding: 0px;
    }

    .imagen-seccion img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }



     .titulo{
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .titulo h1{
       color: var(--color-sec);
       font-size: 52px;
    }

    .contact-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: black;
    }

    .contact-overlay h1 {
      color: var(--color-sec);
        font-size: 24px;
    }

    .contact-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .contact-button {
        background-color: var(--color-ppal);
        color: var(--color-sec);
        border: 2px solid var(--color-sec);
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: transform 0.3s;
}

.contact-button:hover {
  border: 2px solid var(--color-ter);;
   transform: scale(1.2); 
}

    
  .design-credit a {
    text-decoration: none;
    color: white;
  }

  



  @media (max-width: 768px) {
    header {
      padding: 5px 10px;
    }

    section {
      padding: 0px;
      margin: 0px 0;
    }


    .contact-button {
        padding: 4px 8px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 50%;
        cursor: pointer;
        transition: transform 0.3s;
}

.contact-button:hover {
   transform: scale(1.2); 
   border: 2px solid var(--color-ter);
}

    

  
  }
</style>
<section class="imagen-seccion">
    <img src="Imagenes/1.jpg" alt="Imagen de ancho completo">
</section>


<section class="imagen-seccion">
    <img src="Imagenes/Inicio.jpg" alt="Imagen de ancho completo">
    <div class="contact-overlay">
        <div class="contact-buttons">
            <a href="bebidas.php" class="contact-button">Catalogo de cocteles</a>
        </div>
    </div>
</section>

<section class="imagen-seccion">
    <img src="Imagenes/Historia2.jpg" alt="Imagen de ancho completo">
    <div class="contact-overlay">
        <div class="contact-buttons">
            <a href="historia.php" class="contact-button">Un poco de historia</a>
        </div>
    </div>
</section>

<section class="imagen-seccion">
    <img src="Imagenes/ruleta2.jpg" alt="Imagen de ancho completo">
    <div class="contact-overlay">
        <div class="contact-buttons">
            <a href="ruleta.php" class="contact-button">Ruleta de cocteles</a>
        </div>
    </div>
</section>



<?php
include("footer.php");
?>



</body>

</html>