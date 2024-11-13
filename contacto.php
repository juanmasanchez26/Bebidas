<!-- <link rel="stylesheet" href="style.css"> ejemplo-->
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
        background-color: var(--color-sec);
        color: var(--color-ppal);
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
  @media (max-width: 768px) {
    header {
      padding: 5px 10px;
    }

    section {
      padding: 0px;
      margin: 0px 0;
    }


    .contact-button {
        background-color: var(--color-sec);
        color: var(--color-ppal);
        border: 2px solid var(--color-sec);
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
    <img src="Imagenes/mail.jpg" alt="Imagen de ancho completo">
    <div class="contact-overlay">
        <div class="contact-buttons">
            <a href=https://mail.google.com/mail/u/0/?pli=1#inbox?compose=DmwnWrRsqXjkxqXXRZRsRxzNlhknhxZbNhMPNhPjmsqKpCbvFGdRGNGRCtbbgxVXrfzQPdsldfql class="contact-button">Contactanos</a>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>



</body>

</html>