<style>


    .social-section {
        background-color: var(--color-ppal);
        text-align: center;
        padding: 40px;
    }

    .design-credit a{
        text-decoration: none;
        color: white;
    }

    /* Estilo para los botones de redes sociales */
    .social-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .social-button {
        background-color: var(--color-ppal);
        color: var(--color-sec);
        border: none;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        font-size: 20px;
        line-height: 60px;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .logoFooter{
        width: 10%;
        height: auto;
    }


  
    .social-section h2 {
        color: var(--color-ter);
    }

    .design-credit p{
     color: var(--color-sec);
    }

    .design-credit h1{
     color: var(--color-sec);
    }

    @media (max-width: 768px) {
        .social-buttons {
            margin-top: 10px;
        }

        .social-button {
            width: 40px;
            height: 40px;
            font-size: 18px;
            line-height: 40px;
        }

        .logo_tiktok,
        .logo_ig {
            width: 40px;
        }
    }
</style>
<section class="social-section">
    <div class="social-buttons">
            <img class="logoFooter" src="Imagenes\logo-blanco.png" alt="Logo de la empresa" class="logo_tiktok">
    </div>
    <div class="design-credit">
        <!-- <a href="http://localhost/Draco/index.php">Diseñada por: Draco</a> -->
        <h1>Bronce</h1>
        <h2>Bebe con responsabilidad</h2>
        <p>Diseñado por: Juan Manuel Sanchez</p>
    </div>
</section>