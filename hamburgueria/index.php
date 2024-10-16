<?php
include_once('cabec.php');
?>
<main>
    <section class="home" id="home">
        <div class="container-fluid text-center">
            <div class="row align-items-center overlay h-100">
                <div class="col text-start bem-vindo ">
                    <h2>Seja bem vindo ao Bassora burguer.</h2>
                    <strong class="h1">Venha saborear nossos lanches.</strong>
                    <br>
                    <a href="#about" class="btn btn-secondary" id="botao">Sobre nós</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about text-black d-flex align-items-center" id="about">
        <div class="container-fluid">
            <div class="container text-center">
                <div class="row align-items-center">
                    <!-- Texto sobre nós -->
                    <div class="col-md-6 text-md-start text-center sobre">
                        <h2 class="mb-3">Sobre nós</h2>
                        <p class="mb-4">A Bassora Burguer é uma hamburgueria moderna que combina ingredientes de alta qualidade com um ambiente descontraído e acolhedor. Localizada no coração da cidade, ela oferece uma experiência única para os amantes de hambúrgueres, com um cardápio repleto de opções artesanais. Cada hambúrguer é preparado com carnes selecionadas, queijos especiais e molhos feitos na própria casa, garantindo um sabor autêntico e diferenciado. Além disso, o pão fresquinho e as porções generosas de acompanhamentos, como batatas rústicas e anéis de cebola, são um destaque à parte.</p>
                        <a href="#meet" class="btn btn-secondary">Conhecer</a>
                    </div>
                    <div class="col-md-6 d-none d-lg-inline-block">
                        <picture>
                            <img src="img/icones/logo.jpg" alt="Imagem logo da hamburgueria" class="img-thumbnail img-fluid">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="meet d-flex " id="meet">
        <div class="container-fluid text-center ">
                <div class="row align-items-center  overlay h-100 px-5">
                    <div class="col-lg-6 text-lg-start text-white text-center">
                        <h2 class="h1">Aqui na localização pode-se nos encontrar para saborear nossas lanches</h2>
                        <br>
                        <p class="h3">ta esperando oque para encontrar o paraíso em forma de hamburguer?</p>
                        <br>
                        <p class="h3">Veja a localização do <strong>exemplo</strong></p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                            <script>
                                (function() {
                                    var setting = {
                                        "query": "Av. Abdo Najar, 348 - Cidade Jardim I, Americana - SP, 13466-660, Brasil",
                                        "width": "100%",
                                        "height": "400",
                                        "satellite": false,
                                        "zoom": 17,
                                        "placeId": "ChIJrWDsr4KZyJQRovbgWuooO8k",
                                        "cid": "0xc93b28ea5ae0f6a2",
                                        "coords": [-22.7589478, -47.3309535],
                                        "cityUrl": "/brazil/campinas-19011",
                                        "cityAnchorText": "Mapa de Campinas (Sao Paulo), Sao Paulo, Brasil",
                                        "lang": "pt",
                                        "queryString": "Av. Abdo Najar, 348 - Cidade Jardim I, Americana - SP, 13466-660, Brasil",
                                        "centerCoord": [-22.7589478, -47.3309535],
                                        "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                        "embed_id": "1154993"
                                    };
                                    var d = document;
                                    var s = d.createElement('script');
                                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=1154993';
                                    s.async = true;
                                    s.onload = function(e) {
                                        window.OneMap.initMap(setting)
                                    };
                                    var to = d.getElementsByTagName('script')[0];
                                    to.parentNode.insertBefore(s, to);
                                })();
                            </script><a href="https://1map.com/pt/map-embed">1 Map</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>
<script async src="//www.instagram.com/embed.js"></script>
<?php
include_once('rodape.php')
?>