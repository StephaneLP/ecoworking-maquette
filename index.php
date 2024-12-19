<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/common/global.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/common/layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pages/index.css">
    <link rel="icon" href="/assets/img/logos/favicon.png" type="image/x-icon">
    <title>ÉcoWorking</title>
</head>
<body>
    <?php include "pages/layout/header.php" ?>
    <main>
        <!---------------------------------------------------------------------------->
        <!-- CARROUSEL -->
        <!---------------------------------------------------------------------------->
        <section class="carousel">
            <button class="carousel_btn carousel_btnPrev">
                <span><</span>
            </button>
            <div class="carousel_center">
                <div class="carousel_infos">
                    <div>
                        <p class="carousel_infos-title"></p>
                        <p class="carousel_infos-subtitle"></p>                        
                    </div>
                </div>                
                <div class="carousel_nav">
                </div>
            </div>
            <button class="carousel_btn carousel_btnNext">
                <span>></span>
            </button>
        </section>
        <!---------------------------------------------------------------------------->
        <!-- PRESENTATION -->
        <!---------------------------------------------------------------------------->
        <section class="presentation container">
            <h1>Bienvenue en Alsace ÉcoWorking</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Dolores odio assumenda autem inventore architecto similique. 
                Quo, quis non eius quae numquam, ullam cumque commodi 
                mollitia iusto sed consectetur. Eveniet, magnam.
                Quo, quis non eius quae numquam, ullam cumque commodi 
                mollitia iusto sed consectetur. Eveniet, magnam.
            </p>
            <div class="presentation-cities">
                <div>
                    <div class="city-img">
                        <img src="/assets/img/index/str.jpg" alt="Strasbourg">
                        <div class="city-overlay">
                            <a class="button" href="#0">Sélectionner</a>
                        </div>
                    </div>
                    <h3>Strasbourg</h2>
                </div>
                <div>
                    <div class="city-img">
                        <img src="/assets/img/index/mul.jpg" alt="Mulhouse">
                        <div class="city-overlay">
                            <a class="button" href="#0">Sélectionner</a>
                        </div>
                    </div>
                    <h3>Mulhouse</h2>
                </div>
                <div>
                    <div class="city-img">
                        <img src="/assets/img/index/col.jpg" alt="Colmar">
                        <div class="city-overlay">
                            <a class="button" href="#0">Sélectionner</a>
                        </div>
                    </div>
                    <h3>Colmar</h2>
                </div>
            </div>
        </section>
        <!---------------------------------------------------------------------------->
        <!-- TOP 3 -->
        <!---------------------------------------------------------------------------->
        <section class="places">
            <h2>Nos favoris</h2>
            <div class="places-top container">
                <div class="place">
                    <div class="place-header">
                        <span class="place-name">Green Place</span>
                        <span class="place-city">Strasbourg</span>
                    </div>
                    <div class="place-containt">
                        <img src="/assets/img/index/place1.jpg" alt="Green Place">
                        <div class="place-comment">
                            <span>«</span>
                            <span class="place-comment-text">
                                Très joli lieu de coworking : bureaux spacieux, jardin,
                                cuisine équipée avec bureaux nomades, super ambiance de travail !
                            </span>
                            <span>»</span>
                        </div>
                        <div class="place-overlay">
                            <a class="button" href="#0">Ouvrir la fiche</a>
                        </div>  
                    </div>
                </div>
                <div class="place">
                    <div class="place-header">
                        <span class="place-name">Alsace eCafé</span>
                        <span class="place-city">Mulhouse</span>
                    </div>
                    <div class="place-containt">
                        <img src="/assets/img/index/place2.jpg" alt="Alsace eCafé">
                        <div class="place-comment">
                            <span>«</span>
                            <span class="place-comment-text">
                                Un bel espace de coworking, chaleureux, moderne et non loin du centre de 
                                Mulhouse. Aucun doute, tout est fait pour que les co-workers s'y sentent 
                                comme chez eux ! Je recommande sans hésitation.
                            </span>
                            <span>»</span>                                
                        </div>
                        <div class="place-overlay">
                            <a class="button" href="#0">Ouvrir la fiche</a>
                        </div>
                    </div>              
                </div>
                <div class="place">
                    <div class="place-header">
                        <span class="place-name">La Bulle Verte</span>
                        <span class="place-city">Colmar</span>
                    </div>
                    <div class="place-containt">
                        <img src="/assets/img/index/place3.jpg" alt="La Bulle Verte">
                        <div class="place-comment">
                            <span>«</span>
                            <span class="place-comment-text">
                                Très joli lieu de coworking : bureaux spacieux, jardin,
                                cuisine équipée avec bureaux nomades, super ambiance de travail !
                            </span>
                            <span>»</span>                                
                        </div>
                        <div class="place-overlay">
                            <a class="button" href="#0">Ouvrir la fiche</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </main>
    <?php include "pages/layout/footer.php" ?>
</body>
<script src="/js/carousel/carousel.js"></script>
</html>