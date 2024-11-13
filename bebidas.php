<?php
include("header.php");
?>
<style>
    :root {
        --color-ppal: black;
        --color-sec: white;
        --color-ter: #ff5400;
    }

    body{
        background-color: black;
    }


    .gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
        text-align: center;
        justify-content: center;
    }

    .drink {
        position: relative;
        width: 300px;
        overflow: hidden;
    }

    .drink img {
        width: 100%;
        height: auto;
        display: block;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .drink:hover .overlay {
        opacity: 1;
    }

    .btn {
        background-color: var(--color-ter);
        color: var(--color-ppal);
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        margin: 10px;
        cursor: pointer;
        text-decoration: none;
    }

    .btn:hover{
        background-color: var(--color-sec);
        color: var(--color-ppal);
    }

    .drink-name {
        color: white;
        padding: 5px;
        font-size: 16px;
    }

    a {
        text-decoration: none;
        color: white;
        margin-bottom: 45%;
    }

    .search-bar {
        text-align: center;
        margin: 20px 0;
    }

    #searchInput {
        background-color: var(--color-ppal);
        color: var(--color-sec);
        padding: 10px;
        width: 300px;
        font-size: 16px;
        border: 1px solid var(--color-ter);
        border-radius: 5px;
        margin-right: 10px;
    }

    #searchButton {
        background-color: var(--color-ter);
        color: var(--color-ppal);
        border: 2px solid var(--color-ter);
        border-radius: 5px;
        padding: 6px 12px;
        cursor: pointer;
    }

    #searchButton:hover {
        background-color: var(--color-ppal);
        color: var(--color-ter);
    }

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
        border-radius: 10px;
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

    @media (max-width: 768px) {
        #searchInput{
            width: 75%;
        }

    #searchButton {
        background-color: var(--color-ter);
        color: var(--color-ppal);
        border: 2px solid var(--color-ter);
        border-radius: 5px;
        padding: 8px 16px;
        margin-top: 10px;
        cursor: pointer;
    }

    #searchButton:hover {
        background-color: var(--color-ppal);
        color: var(--color-ter);
    }
}
</style>

<body>
<section class="imagen-seccion">
    <img src="Imagenes/Bebidas1.jpg" alt="Imagen de ancho completo">
  
<div class="titulo">
<h1>Cocteles</h1>
</div>

    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Buscar bebida...">
        <button id="searchButton">Buscar</button>
    </div>
    <div class="gallery" id="drink-gallery">
        <div class="drink" data-name="Margarita">
            <img src="Imagenes\margarita.png" alt="Bebida 2">
            <div class="overlay">
                <a href="margarita.php">Margarita</a>
            </div>
       </div>
        <div class="drink" data-name="Mojito">
            <img src="Imagenes\mojito.png" alt="Bebida 2">
            <div class="overlay">
                <a href="mojito.php">Mojito</a>
            </div>
        </div>
        <div class="drink" data-name="Garibaldi">
            <img src="Imagenes\garibaldi.png" alt="Bebida 2">
            <div class="overlay">
                <a href="garibaldi.php">Garibaldi</a>
            </div>
        </div>
        <div class="drink" data-name="Daiquiri">
            <img src="Imagenes\daiquiri.png" alt="Bebida 2">
            <div class="overlay">
                <a href="daiquiri.php">Daiquiri</a>
            </div>
        </div>
        <div class="drink" data-name="Martini">
            <img src="Imagenes\martini.png" alt="Bebida 2">
            <div class="overlay">
                <a href="martini.php">Martini</a>
            </div>
        </div>
        <div class="drink" data-name="Piña Colada">
            <img src="Imagenes\piña-colada.png" alt="Bebida 2">
            <div class="overlay">
                <a href="piña-colada.php">Piña Colada</a>
            </div>
        </div>
        <div class="drink" data-name="Old Fashioned">
            <img src="Imagenes\old-fashioned.png" alt="Bebida 2">
            <div class="overlay">
                <a href="old-fashioned.php"> Old Fashioned</a>
            </div>
        </div>
        <div class="drink" data-name="Negroni">
            <img src="Imagenes\negroni.png" alt="Bebida 2">
            <div class="overlay">
                <a href="negroni.php">Negroni</a>
            </div>
        </div>
        <div class="drink" data-name="Manhattan">
            <img src="Imagenes\manhattan.png" alt="Bebida 2">
            <div class="overlay">
                <a href="manhattan.php">Manhattan</a>
            </div>
        </div>
        <div class="drink" data-name="Cosmopolitan">
            <img src="Imagenes\cosmopolitan.png" alt="Bebida 2">
            <div class="overlay">
                <a href="cosmopolitan.php">Cosmopolitan</a>
            </div>
        </div>
        <div class="drink" data-name="Tequila Sunrise">
            <img src="Imagenes\tequila-sunrise.png" alt="Bebida 2">
            <div class="overlay">
                <a href="tequila-sunrise.php">Tequila Sunrise</a>
            </div>
        </div>
        <div class="drink" data-name="Caipirinha">
            <img src="Imagenes\caipirinha.png" alt="Bebida 2">
            <div class="overlay">
                <a href="caipirinha.php">Caipirinha</a>
            </div>
        </div>
        <div class="drink" data-name="Fernet">
            <img src="Imagenes\fernet.png" alt="Bebida 2">
            <div class="overlay">
                <a href="fernet.php">Fernet con Coca</a>
            </div>
        </div>
        <div class="drink" data-name="Pisco Sour">
            <img src="Imagenes\pisco-sour.png" alt="Bebida 2">
            <div class="overlay">
                <a href="pisco-sour.php">Pisco Sour</a>
            </div>
        </div>
        <div class="drink" data-name="Paloma">
            <img src="Imagenes\paloma.png" alt="Bebida 2">
            <div class="overlay">
                <a href="paloma.php">Paloma</a>
            </div>
        </div>
        <div class="drink" data-name="Sidecar">
            <img src="Imagenes\sidecar.png" alt="Bebida 2">
            <div class="overlay">
                <a href="sidecar.php">Sidecar</a>
            </div>
        </div>
        <div class="drink" data-name="Bellini">
            <img src="Imagenes\bellini.png" alt="Bebida 2">
            <div class="overlay">
                <a href="bellini.php">Bellini</a>
            </div>
        </div>
        <div class="drink" data-name="Aperol">
            <img src="Imagenes\aperol_spritz.png" alt="Bebida 2">
            <div class="overlay">
                <a href="aperol_spritz.php">Aperol Spritz</a>
            </div>
        </div>
        <div class="drink" data-name="White Russian">
            <img src="Imagenes\white_russian.png" alt="Bebida 2">
            <div class="overlay">
                <a href="white_russian.php">White Russian</a>
            </div>
        </div>
        <div class="drink" data-name="Black Russian">
            <img src="Imagenes\black_russian.png" alt="Bebida 2">
            <div class="overlay">
                <a href="black_russian.php"> Black Russian</a>
            </div>
        </div>
        <div class="drink" data-name="Whiskey Sour">
            <img src="Imagenes\whiskey_sour.png" alt="Bebida 2">
            <div class="overlay">
                <a href="whiskey_sour.php">Whiskey Sour</a>
            </div>
        </div>
        <div class="drink" data-name="Tom Collins">
            <img src="Imagenes\tom-collins.png" alt="Bebida 2">
            <div class="overlay">
                <a href="tom_collins.php">Tom Collins</a>
            </div>
        </div>
        <div class="drink" data-name="Moscow Mule">
            <img src="Imagenes\moscow-mule.png" alt="Bebida 2">
            <div class="overlay">
                <a href="moscow_mule.php">Moscow Mule</a>
            </div>
        </div>
        <div class="drink" data-name="Blue Lagoon">
            <img src="Imagenes\blue-lagoon.png" alt="Bebida 2">
            <div class="overlay">
                <a href="blue_lagoon.php">Blue Lagoon</a>
            </div>
        </div>
        <div class="drink" data-name="Long Island Iced Tea">
            <img src="Imagenes\long-island.png" alt="Bebida 2">
            <div class="overlay">
                <a href="long_island.php">Long Island Iced Tea</a>
            </div>
        </div>
        <div class="drink" data-name="Sex on the beach">
            <img src="Imagenes\sex-on-the-beach.png" alt="Bebida 2">
            <div class="overlay">
                <a href="sex_on_the_beach.php">Sex on the beach</a>
            </div>
        </div>
        <div class="drink" data-name="Zombie">
            <img src="Imagenes\zombie.png" alt="Bebida 2">
            <div class="overlay">
                <a href="zombie.php">Zombie</a>
            </div>
        </div>
        <div class="drink" data-name="Sazerac">
            <img src="Imagenes\sazerac.png" alt="Bebida 2">
            <div class="overlay">
                <a href="sazerac.php">Sazerac</a>
            </div>
        </div>
        <div class="drink" data-name="Cuba Libre">
            <img src="Imagenes\cuba_libre.png" alt="Bebida 2">
            <div class="overlay">
                <a href="cuba_libre.php">Cuba Libre</a>
            </div>
        </div>
        <div class="drink" data-name="Brandy Alexander">
            <img src="Imagenes\brandy-alexander.png" alt="Bebida 2">
            <div class="overlay">
                <a href="brandy_alexander.php">Brandy Alexander</a>
            </div>
        </div>
        <div class="drink" data-name="Alexander">
            <img src="Imagenes\alexander.png" alt="Bebida 2">
            <div class="overlay">
                <a href="alexander.php">Alexander</a>
            </div>
        </div>
        <div class="drink" data-name="Singapore Sling">
            <img src="Imagenes\singapore-sling.png" alt="Bebida 2">
            <div class="overlay">
                <a href="singapore_sling.php">Singapore Sling</a>
            </div>
        </div>
        <div class="drink" data-name="Pink Gin">
            <img src="Imagenes\pink-gin.png" alt="Bebida 2">
            <div class="overlay">
                <a href="pink_gin.php">Pink Gin</a>
            </div>
        </div>
        <div class="drink" data-name="Limoncello">
            <img src="Imagenes\limoncello.png" alt="Bebida 2">
            <div class="overlay">
                <a href="limoncello_spritz.php">Limoncello Spritz</a>
            </div>
        </div>
        <div class="drink" data-name="Vermouth">
            <img src="Imagenes\vermouth.png" alt="Bebida 2">
            <div class="overlay">
                <a href="vermouth.php">Vermouth</a>
            </div>
        </div>
        <div class="drink" data-name="Dry Martini">
            <img src="Imagenes\dry_martini.png" alt="Bebida 2">
            <div class="overlay">
                <a href="dry_martini.php">Dry Martini</a>
            </div>
        </div>
        <div class="drink" data-name="Bloody Mary">
            <img src="Imagenes\bloody_mary.png" alt="Bebida 2">
            <div class="overlay">
                <a href="bloody_mary.php">Bloody Mary</a>
            </div>
        </div>
        <div class="drink" data-name="Gimlet">
            <img src="Imagenes\gimlet.png" alt="Bebida 2">
            <div class="overlay">
                <a href="gimlet.php">Gimlet</a>
            </div>
        </div>
        <div class="drink" data-name="Vodka Martini">
            <img src="Imagenes\vodka_martini.png" alt="Bebida 2">
            <div class="overlay">
                <a href="vodka_martini.php">Vodka Martini</a>
            </div>
        </div>
        <div class="drink" data-name="Irish Coffee">
            <img src="Imagenes\irish_cofee.png" alt="Bebida 2">
            <div class="overlay">
                <a href="irish_cofee.php">Irish Coffee</a>
            </div>
        </div>
        <div class="drink" data-name="Dark 'n' Stormy">
            <img src="Imagenes\dark_stormy.png" alt="Bebida 2">
            <div class="overlay">
                <a href="dark_stormy.php">Dark 'n' Stormy</a>
            </div>
        </div>
        <div class="drink" data-name="Grasshopper">
            <img src="Imagenes\grasshopper.png" alt="Bebida 2">
            <div class="overlay">
                <a href="grasshopper.php">Grasshopper</a>
            </div>
        </div>
        <div class="drink" data-name="Bee's Knees">
            <img src="Imagenes\bee_knees.png" alt="Bebida 2">
            <div class="overlay">
                <a href="bee_knees.php">Bee's Knees</a>
            </div>
        </div>
        <div class="drink" data-name="Boulevardier">
            <img src="Imagenes\boulevardier.png" alt="Bebida 2">
            <div class="overlay">
                <a href="boulevardier.php">Boulevardier</a>
            </div>
        </div>
        <div class="drink" data-name="French 75">
            <img src="Imagenes\french75.png" alt="Bebida 2">
            <div class="overlay">
                <a href="french75.php">French 75</a>
            </div>
        </div>
        <div class="drink" data-name="Whiskey Smash">
            <img src="Imagenes\whiskey_smash.png" alt="Bebida 2">
            <div class="overlay">
                <a href="whiskey_smash.php">Whiskey Smash</a>
            </div>
        </div>
        <div class="drink" data-name="Lynchburg Lemonade">
            <img src="Imagenes\lynchburg_lemonade.png" alt="Bebida 2">
            <div class="overlay">
                <a href="lynchburg_lemonade.php">Lynchburg Lemonade</a>
            </div>
        </div>
        <!-- <div class="drink" data-name="Spritz Navideño">
            <img src="Imagenes\spritz_navideño.png" alt="Bebida 2">
            <div class="overlay">
                <a href="spritz_navideño.php">Spritz Navideño</a>
            </div>
        </div> -->
        <div class="drink" data-name="Amore Milano">
            <img src="Imagenes\amore_milano.png" alt="Bebida 2">
            <div class="overlay">
                <a href="amore_milano.php">Amore Milano</a>
            </div>
        </div>
        <!-- <div class="drink" data-name="Cazador Furtivo">
            <img src="Imagenes\cazador_furtivo.png" alt="Bebida 2">
            <div class="overlay">
                <a href="cazador_furtivo.php">Cazador Furtivo</a>
            </div>
        </div> -->
        <div class="drink" data-name="Tinto de Verano">
            <img src="Imagenes\tinto_de_verano.png" alt="Bebida 2">
            <div class="overlay">
                <a href="tinto_de_verano.php">Tinto de Verano</a>
            </div>
        </div>
        <!-- <div class="drink" data-name="South Beach">
            <img src="Imagenes\south_beach.png" alt="Bebida 2">
            <div class="overlay">
                <a href="south_beach.php">South Beach</a>
            </div>
        </div> -->
        <div class="drink" data-name="Gin Tonic">
            <img src="Imagenes\gin_tonic.png" alt="Bebida 2">
            <div class="overlay">
                <a href="gin_tonic.php">Gin Tonic</a>
            </div>
        </div>
        <div class="drink" data-name="Pantera Rosa">
            <img src="Imagenes\pantera_rosa.png" alt="Bebida 2">
            <div class="overlay">
                <a href="pantera_rosa.php">Pantera Rosa</a>
            </div>
        </div>
        <div class="drink" data-name="Mint Julep">
            <img src="Imagenes\mint_julep.png" alt="Bebida 2">
            <div class="overlay">
                <a href="mint_julep.php">Mint Julep</a>
            </div>
        </div>
        <div class="drink" data-name="Milano Spritz">
            <img src="Imagenes\milano_spritz.png" alt="Bebida 2">
            <div class="overlay">
                <a href="milano_spritz.php">Milano Spritz</a>
            </div>
        </div>
<!-- Mas bebidas... -->


    </div>
  

    <?php
    include("footer.php");
    ?>

    
<script src="busqueda.js"></script>



</body>

</html>