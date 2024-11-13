<?php
include("header.php");
?>
<link rel="stylesheet" href="estilo_bebidas.css">
<style>
  
    .imagen-seccion {
        position: relative;
        text-align: center;
        /* Centra el contenido horizontalmente */
        background-color: var(--color-ppal);
        /* Color de fondo de la sección */
        padding: 0px;
        /* Espaciado interior para separar el contenido */
    }

    /* Estilo para la imagen */
    .imagen-seccion img {
        max-width: 100%;
        /* La imagen se ajustará al ancho de la sección */
        height: auto;
        /* La altura se ajusta automáticamente para mantener la proporción */
        display: block;
        /* Elimina cualquier espacio adicional debajo de la imagen */
        margin: 0 auto;
        /* Centra la imagen horizontalmente en la sección */
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
        color: var(--color-ppal);
        font-size: 24px;
    }

    /* Estilo para los botones de contacto */
    .contact-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .contact-button {
        background-color: var(--color-ppal);
        color: var(--color-sec);
        border: 2px solid var(--color-ppal);
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
    }

    .contact-button:hover {
        background-color: var(--color-sec);
        color: var(--color-ppal);
    }

    /* Estilos CSS para la página de historia de la cerveza */




    .historia {
        background-color: var(--color-ppal);
        padding: 20px;
        margin: auto;
        max-width: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .historia h2 {
        color: var(--color-ter);
        font-size: 1.5em;
        margin: 20px 0;
    }

    .historia p {
        color: var(--color-sec);
        ;
        line-height: 1.4;
    }

    .preparacion {
        background-color: var(--color-sec);
        padding: 20px;
        margin: auto;
        max-width: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .preparacion h2 {
        color: var(--color-ter);
        font-size: 1.5em;
        margin: 20px 0;
    }

    .preparacion h3 {
        color: var(--color-ter);
        font-size: 1em;
        margin: 20px 0;
    }

    .preparacion p {
        color: var(--color-ppal);
        ;
        line-height: 1.4;
    }
</style>
<section class="imagen-seccion">
    <img src="Imagenes/aperol_spritz.jpg" alt="Imagen de ancho completo">
   
</section>
<section class="historia" id="historia">
    <h2>Historia</h2>
    <p>El Aperol Spritz forma parte de una rica tradición italiana de los aperitivos, donde la gente se reúne antes de
        la cena para disfrutar de bebidas y bocadillos ligeros. Los aperitivos son una parte fundamental de la cultura
        italiana, y el Aperol Spritz es un ejemplo perfecto de esta costumbre.
    </p>

    <p>El Aperol, el licor amargo utilizado en este cóctel, fue creado en 1919 en Padua, Italia, por los hermanos
        Barbieri. Su fórmula única combina hierbas y raíces aromáticas que le dan su característico sabor agridulce y su
        distintivo color naranja brillante. Aperol se convirtió rápidamente en un elemento básico en los bares y cafés
        de Italia.
    </p>

    <p>La tradición de mezclar licores amargos con agua carbonatada o vino es una práctica común en Italia. El Spritz,
        en general, es un tipo de cóctel que sigue este patrón, y el Aperol Spritz es una variante popular. La receta
        clásica combina Aperol con Prosecco y soda, creando una bebida chispeante y refrescante con un equilibrio
        perfecto de dulzura y amargura.</p>

    <p>Aunque el Aperol Spritz es una bebida italiana clásica, se ha vuelto extremadamente popular en todo el mundo. Su
        atractivo color y sabor, junto con su sencilla preparación, lo convierten en un cóctel ideal para disfrutar en
        reuniones sociales y eventos al aire libre.</p>



</section>
<section class="preparacion" id="preparacion">
    <h2>Proceso de Elaboración</h2>
    <h3>Ingredientes</h3>

    <p>2 oz (60 ml) de Aperol.</p>
    <p>3 oz (90 ml) de Prosecco.</p>
    <p>Soda (agua carbonatada) al gusto.</p>
    <p>Rodaja de naranja para decorar.</p>
    <p>Hielo.</p>

    <h3>Pasos</h3>

    <p>Llena un vaso de vino (o copa de balón) con hielo.</p>

    <p>Vierte el Aperol sobre el hielo.</p>

    <p>Añade el Prosecco.</p>

    <p>Completa el cóctel con soda al gusto, generalmente una pequeña cantidad.</p>

    <p>Remueve suavemente para mezclar los ingredientes</p>

    <p>Decora con una rodaja de naranja.</p>

</section>

<?php
include("footer.php");
?>
</body>

</html>