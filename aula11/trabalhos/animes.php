<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--meu css-->
    <link rel="stylesheet" href="css/style.css">

    <title>ANIMES - Portal FATECon</title>
</head>

<body id="pageAnimes">
    <!--bootstrap javaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!--
        
                        ///////////////////////////////
                                //       //                    //
                                //       //                  ////
                                //       //                //  //
                                ////////////////////     //    //
                                //       //     ////   ////    ///
                                //       //   //  // //  //   //
                                //       // //    ///    // //
                                //       ///      //     ///
        
        -->

    <div class="container-fluid px-0">
        <!--header-->
        <?php include 'includes/header.php' ?>

        <!--artigo sobre animes-->
        <article class="py-lg-5 py-md-5 py-sm-0 clearfix">
            <div class="container py-5 bordas">
                <div class="d-flex flex-lg-row flex-md-row flex-sm-column py-lg-5 py-sm-0 px-lg-5 px-md-5 px-sm-0 flex-wrap justify-content-between">
                    <div class="order-1 order-sm-1 order-md-2 order-lg-2 text-center m-auto col-lg-3 col-md-4 col-sm-12">
                        <img src="images/anime_character_luffy.webp" alt="Luffy do Chapéu de Palha" class="p-2 rounded-4 img-fluid">
                    </div>

                    <div class="col-12 order-0 ">
                        <h1 class="col-lg-6 col-md-8 text-center text-sm-center text-md-start text-lg-start">VAMOS FALAR UM POUCO DE ANIMES?</h1>
                    </div>

                    <small>Escrito por: Fabiano Ramos.</small>

                    <p class="mt-4">No evento da FATECon HQs deste ano, os fãs de cultura pop tiveram a oportunidade de participar de um concurso de melhor cosplay, onde dezenas de pessoas exibiram sua criatividade e paixão ao se vestirem como seus personagens favoritos de animes. Mas, afinal, o que são animes? Essa pergunta pode parecer simples para muitos, mas esconde uma rica história e tradição por trás dessas produções tão queridas por milhões de pessoas ao redor do mundo.</p>
                    
                    <div class="order-2 order-sm-2 order-md-1 order-lg-1 col-lg-9 col-md-8 col-sm-12">
                        <p class="mt-4">Animes são animações de origem japonesa, geralmente derivada dos <a href="mangas.php" class="link-dark"><strong>mangás</strong></a>, que conquistaram uma audiência global. Diferentes dos desenhos animados ocidentais, os animes se destacam por suas histórias complexas, traços artísticos únicos e a capacidade de abordar temas profundos e variados, desde aventuras épicas até dramas existenciais. Embora muitos animes sejam voltados para o público jovem, há obras para todas as idades e gostos, tornando o gênero acessível e diversificado.</p>

                        <p class="mt-4">A palavra "anime" vem da abreviação da palavra inglesa <span lang="en-us">"animation"</span>, mas no Japão, refere-se a qualquer tipo de animação. Fora do Japão, no entanto, o termo é usado exclusivamente para as produções japonesas. Essas obras vão além da estética vibrante e envolvem narrativas intensas, cheias de nuances emocionais, culturais e, muitas vezes, filosóficas, o que torna o gênero tão apreciado em diversas partes do mundo.</p>
                    </div>

                    <p class="order-3 mt-4">E agora, que tal conhecer alguns dos animes mais marcantes? Se você é novo nesse universo ou já é um fã, selecionei dez animes que certamente vão te prender e te fazer mergulhar de cabeça nesse fascinante mundo das animações japonesas. Prepare a pipoca e venha conferir!</p>
                </div>
            </div>
        </article>

        <!--Seção - Lista de dez animes para assistir-->
        <section class="py-2 clearfix" id="animeList">
            <div class="px-0">
                <h2 class="mb-3 ps-2 ps-sm-2 ps-md-4 ps-lg-4 text-uppercase">10 Obras-Primas do Anime Que Você Não Pode Deixar de Ver:</h2>
                <div class="carousel"> <!-- A class 'carousel' está segurando os botões no lugar correto-->
                    <button class="scroll-button left" type="button" id="scrollLeft">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="scroll-button right" type="button" id="scrollRight">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    
                    <ul class="d-flex list-unstyled gap-2 px-lg-4 px-md-4 px-sm-0 overflow-x-scroll" id="imageContainer">
                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime1.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_one_piece_sm.webp" class="figure-img rounded-3" alt="One Piece">
                                    <h4 class="text-start m-0" lang="en-us">One Piece</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime2.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_naruto_sm.webp" class="figure-img rounded-3" alt="Naruto Shippuden">
                                    <h4 class="text-start m-0">Naruto Shippuden</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime3.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_dragon_ball_sm.webp" class="figure-img rounded-3" alt="Dragon Ball">
                                    <h4 class="text-start m-0" lang="en-us">Dragon Ball</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime4.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_attack_on_titan_sm.webp" class="figure-img rounded-3" alt="Attack On Titan">
                                    <h4 class="text-start m-0" lang="en-us">Attack On Titan</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime5.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_death_note_sm.webp" class="figure-img rounded-3" alt="Death Note">
                                    <h4 class="text-start m-0" lang="en-us">Death Note</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime6.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_chainsaw_man_sm.webp" class="figure-img rounded-3" alt="Chainsaw Man">
                                    <h4 class="text-start m-0" lang="en-us">Chainsaw Man</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime7.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_cowboy_bebop_sm.webp" class="figure-img rounded-3" alt="Cowboy Bebop">
                                    <h4 class="text-start m-0">Cowboy Bebop</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime8.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_one_punch_man_sm.webp" class="figure-img rounded-3" alt="One Punch Man">
                                    <h4 class="text-start m-0" lang="en-us">One Punch Man</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime9.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_jujutsu_kaisen_sm.webp" class="figure-img rounded-3" alt="Jujutsu Kaisen">
                                    <h4 class="text-start m-0">Jujutsu Kaisen</h4>
                                </a>
                            </div>
                        </li>

                        <li class="mx-2">
                            <div class="clearfix zoom-img mt-1">
                                <a href="includes/anime10.php" class="load-content link-dark link-underline-opacity-0"> <!--a classe 'load-content' está ligada ao meu JavaScript-->
                                    <img src="images/anime_demon_slayer_sm.webp" class="figure-img rounded-3" alt="Demon Slayer">
                                    <h4 class="text-start m-0" lang="en-us">Demon Slayer</h4>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!--NESTA DIV VAZIA ESTARÁ O CONTEÚDO DOS ANIMES DE 1 A 10, CARREGADO DINAMICAMENTE VIA JAVASCRIPT-->
        <div class="container p-2" id="content"></div>

        <!--Secão Veja Também-->
        <section class="py-4">
            <div class="container p-2 text-center rounded-3 py-4">
                <h3>CONHEÇA TAMBÉM: SÉRIES BASEADAS EM HQ</h3>
                <p>Aqui você tambem conhecerá séries famosas que saíram das HQs e que você (talvez) nem sabia!</p>
                
                    <a class="btn btn-secondary btn-lg" href="series.html">SAIBA MAIS</a>

            </div>
        </section>

        <!--Footer-->
        <?php include 'includes/footer.php' ?>
    </div>

    <!--meu JS-->
    <script src="js/loadContent.js"></script>

</body>
</html>