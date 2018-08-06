<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
    $optin = (isset($_REQUEST['optin']));
    if ($optin == 1) {
      $optin = 1;
      } else {
      $optin = 0;
    }
    $privacy = (isset($_REQUEST['privacy']));
    if ($privacy == 1) {
      $privacy = 1;
      } else {
      $privacy = 0;
    }
    $user = $_SERVER['REMOTE_ADDR'];
	  include('grava.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:locale" content="pt_BR">
        <meta property="og:url" content="http://unidoscontraacorrupcao.org.br" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Faça parte também deste movimento. " />
        <meta property="og:description" content="Assine, Divulgue, Mobilize." />
        <meta property="og:image" content="http://unidoscontraacorrupcao.org.br/assets/img/share.jpg" />
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">



        <title>Novas Medidas | Unidos Contra a Corrupção</title>

        <!-- Bootstrap -->
        <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom Css -->
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/mobile.css" rel="stylesheet">

        <!-- Owlcarousel Css -->
        <link rel="stylesheet" href="resources/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="resources/owlcarousel/owl.theme.default.min.css">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- Lightbox Library Css -->
        <link rel="stylesheet" type="text/css" href="resources/lightboxvideo/css/effect.css">
        <link rel="stylesheet" type="text/css" href="resources/lightboxvideo/css/flashy.css">

        <link rel="stylesheet" href="assets/css/modal-video.min.css">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-55F5VCX');</script>
        <!-- End Google Tag Manager -->

    </head>

    <body id="ti">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55F5VCX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>


        <!-- HEADER -->
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div id="menuprincipal">
                        <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8">

                            <div class="col-md-12">
                                <div class="cnt-mn">
                                    <a href="#as-novas-medidas" class="scrollSuave hvr-underline-from-left scrollSuave ">As Novas Medidas</a>
                                    <a href="#assine"  class="hvr-underline-from-left scrollSuave lnk-mntop-ativo">Assine</a>
                                    <a href="#divulgue"  class="hvr-underline-from-left scrollSuave">Divulgue</a>
                                    <a href="#mobilize"  class="hvr-underline-from-left scrollSuave" id="mobiResponsive">Mobilize</a>
                                </div>
                                <div class="cnt-sociais">
                                    <a href="https://www.facebook.com/unidoscontraacorrupcao/" class="lnk-social" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/unidoscontraacorrupcao/" class="lnk-social" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>


                            <!--
                            <div class="cnt-mn">
                                <a href="#as-novas-medidas" class="scrollSuave hvr-underline-from-left scrollSuave ">As Novas Medidas</a>
                                <a href="#assine"  class="hvr-underline-from-left scrollSuave lnk-mntop-ativo">Assine</a>
                                <a href="#divulgue"  class="hvr-underline-from-left scrollSuave">Divulgue</a>
                                <a href="#mobilize"  class="hvr-underline-from-left scrollSuave">Mobilize</a>
                            </div>

                            <div class="cnt-sociais">
                                <a href="https://www.facebook.com/unidoscontraacorrupcao/" class="lnk-social" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/unidoscontraacorrupcao/" class="lnk-social" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            -->
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- FIM HEADER -->


        <!-- WEBDOOR -->
        <section class="section-webdoor" >
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-12">
                        <h1>
                            <img src="assets/img/logo-medidas.jpg" class="img-responsive desktop">
                            <img src="assets/img/log-as-novas-medidas-mobile.png" class="img-responsive mobile">
                        </h1>
                    </div>

                </div>
            </div>
              <a href="javascript:void(0);"  id="assine">&nbsp;</a>
        </section>
        <!-- FIM WEBDOOR -->

        <!-- FOMRULARIO -->
        <section class="section-formulario">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <div id="frmResp">
                            <img src="assets/img/resp-formulario.png" class="img-responsive">
                            <div class="cnt-sociais">
                                <a href="https://web.whatsapp.com/send?text=Convido%20voc%C3%AA%20a%20fazer%20parte%20da%20maior%20uni%C3%A3o%20contra%20a%20corrup%C3%A7%C3%A3o%20do%20Brasil!%20%23UnidosContraaCorrup%C3%A7%C3%A3o%20%20http%3A%2F%2Funidoscontraacorrupcao.org.br%2F" target="_blank" class="lnk-social-whatsapp" id="whatsForm"><i class="fab fa-whatsapp"></i></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://unidoscontraacorrupcao.org.br" target="_blank" class="lnk-social-facebook"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>

                    <div id="frmPrinc">
                        <div class="col-xs-12 col-md-12">
                            <h2>Assine e faça parte desta união</h2>
                        </div>

                        <div class="col-xs-12 col-md-offset-4 col-md-4">

                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="form-group">
                                    <input type="hidden" id="identificador" name="identificador" value="Assinatura primeiro formulario" >
                                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="inputNome" name="email" placeholder="E-mail" required>
                                </div>
                                <div class="col-xs-12 col-md-12" >
                                    <div style="display: block; position: relative; margin-top: 5px; margin-left: -12px;">
                                            <input type="checkbox" id="c4" value="Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o." name="optin" />
                                            <label for="c4"><span></span>Eu aceito receber notícias sobre o combate à corrupção.</label>
                                        <!-- <input type="checkbox" value="2" required name="privacy"> -->
                                    </div>
                                </div>
                                <div class="clearfix" style="padding-bottom: 20px;"></div>
                                <!--
                                <div class="col-xs-12 col-md-12">
                                    <div class="checkbox">
                                        <label>
                                                <input type="checkbox" value="Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o." name="optin">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                Eu aceito receber notícias sobre o combate à corrupção.
                                        </label>
                                    </div>
                                </div>
                                -->
                                <div class="col-xs-12 col-md-12" >
                                    <div style="display: block; position: relative; margin-top: 5px; margin-left: -12px;">
                                            <input type="checkbox" id="c1" required name="privacy" />
                                            <label for="c1"><span></span>Concordo e aceito os <a href="javascript:void();" class="open_modal">termos de privacidade</a> da campanha: Unidos contra a Corrupção.</label>
                                        <!-- <input type="checkbox" value="2" required name="privacy"> -->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="cnt-bt-enviar-form">
                                        <button type="submit" id="escutaTermo" class="btn btn-default">ENVIAR</button>
                                    </div>
                                </div>
                            </form>

                            <p>&nbsp;</p>
                            <div class="offset-md-2 col-md-8"  style="font-weight: bold; color: #008000">
                                <script type='text/javascript'>
                                    document.write(msg);
                                </script>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-10 col-md-offset-1"><br>
                        <h3>
                            Neste ano, a principal arma dos brasileiros contra a corrupção é o voto. Vamos eleger um Congresso plural, que represente nossa diversidade e que seja formado por candidatos com: <span style="font-weight: normal"><br>(1) passado limpo; <br>(2) compromisso com a democracia; e <br>(3) endosso às Novas Medidas contra a Corrupção</span>
                        </h3>


                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- FIM FOMRULARIO -->

        <!-- FASES -->
        <section class="section-fases">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-1">
                        <img src="assets/img/acabamento-left.png" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-md-10">

                        <h2>Conheça as fases da campanha</h2>

                        <div class="col-xs-12 col-md-12">
                            <div class="cnt-data-inicio">
                                <span class="txt01">Lançamento</span>
                                <span class="txt02">05 de junho</span>
                            </div>
                            <div class="cnt-data-fim">
                                <span class="txt01">Eleições</span>
                                <span class="txt02">07 de outubro</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12">

                            <div class="col-md-12 seta-corpo">
                                <div class="seta-left">
                                    <img src="assets/img/seta-left.png">
                                </div>
                                <div class="seta-right">
                                    <img src="assets/img/seta-right.png">
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-md-12">

                            <div class="align-datas">

                                <div class="box-etapa">
                                    <div class="cnt-numero">
                                        01
                                    </div>
                                    <div class="cnt-texto">
                                        <p>Difundir a mensagem<br>e ampliar a união</p>
                                    </div>
                                </div>

                                <div class="box-etapa">
                                    <div class="cnt-numero">
                                        02
                                    </div>
                                    <div class="cnt-texto">
                                        <p>Comprometer os<br>candidatos</p>
                                    </div>
                                </div>

                                <div class="box-etapa">
                                    <div class="cnt-numero">
                                        03
                                    </div>
                                    <div class="cnt-texto">
                                        <p>Sociedade elege<br>candidatos <br>comprometidos</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 col-md-1">
                        <img src="assets/img/acabamento-right.png" class="img-responsive">
                    </div>

                </div>
            </div>
        </section>
        <!-- fases mobile -->
        <section class="section-fases-mobile">
            <div class="container-fluid">
                <div class="row">


                    <h2>Conheça as fases da campanha</h2>

                    <div class="col-xs-12">
                        <div class="cnt-data-inicio">
                            <span class="txt01">Lançamento</span>
                            <span class="txt02">05 de junho</span>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="item-fases">
                            <div class="cnt-numero">
                                01
                            </div>
                            <div class="cnt-texto">
                                 <p>Difundir a mensagem<br>e ampliar a união</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="item-fases">
                            <div class="cnt-numero">
                                02
                            </div>
                            <div class="cnt-texto">
                                <p>Comprometer os<br>candidatos</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="item-fases">
                            <div class="cnt-numero">
                                03
                            </div>
                            <div class="cnt-texto">
                                <p>Sociedade elege<br>candidatos <br>comprometidos</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12">
                        <div class="cnt-data-fim">
                            <span class="txt01">Eleições</span>
                            <span class="txt02">07 de outubro</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- fim fases mobile -->
        <!-- FASES -->


        <!-- VIDEO -->
        <section class="section-video">

            <div class="container">
                <div class="row">

                    <h2>Entenda as novas medidas contra a corrupção</h2>

                   <!-- <h3><i class="fas fa-angle-down"></i></h3> -->

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <div class="cnt-video">

                        <div class="cnt-btn-play">

                                <div class="js-video-button lnk-play" data-video-id="9Dj2qc8juHE"><i class="fas fa-play"></i></div>

                            <!-- class="js-video-button" data-video-id='L61p2uyiMSo' -->
                            <!-- <a href="https://youtu.be/E-kWIE6tpXk" data-flashy-type="video" class="custom lnk-play"><i class="fas fa-play"></i></div> -->
                        </div>

                        <div class="cnt-social-share">
                            <a href="https://web.whatsapp.com/send?text=Assista%20o%20v%C3%ADdeo%20manifesto%20da%20campanha%20%23UnidosContraaCorrup%C3%A7%C3%A3o%20e%20conhe%C3%A7a%20as%20Novas%20Medidas%20para%20acabar%20com%20esse%20velho%20problema%20do%20Brasil.%20https%3A%2F%2Fyoutu.be%2F9Dj2qc8juHE" target="_blank" class="lnk-share-whats" id="whatsVideo"><i class="fab fa-whatsapp"></i></a>
                            <a href="http://www.facebook.com/sharer.php?u=https://youtu.be/9Dj2qc8juHE" target="_blank" class="lnk-share-facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/intent/tweet?url=https://youtu.be/9Dj2qc8juHE" target="_blank" class="lnk-share-twitter"><i class="fab fa-twitter"></i></a>
                        </div>

                    </div>

                    <div class="acabamento-video"></div>

                </div>
            </div>

        </section>
        <!-- FIM VIDEO -->


        <!-- MANIFESTO -->
        <section class="section-manifesto">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-12">
                        <h2 id="btVerManifesto">Leia o manifesto</h2>
                    </div>

                    <div class="cnt-texto-manifesto">
                        <div class="text-completo">

                            <div class="col-xs-12 col-md-offset-1 col-md-10">



                                <p>
                                A corrupção é um velho problema do Brasil. <br>
                                Vem de longe e, às vezes, parece não ter fim.<br>
                                Alguns avanços aconteceram, mas ainda são insuficientes. <br>
                                Punir é importante, mas não basta.<br>
                                Temos que chegar à raiz do problema.<br>
                                Quebrar a lógica do privilégio e da desigualdade. <br>
                                Por isso, criamos o maior pacote de medidas contra a corrupção do mundo.<br>
                                Um conjunto de reformas preparadas e revisadas por centenas de especialistas de diferentes formações e visões. <br>
                                Criado em tempo para que candidatos possam conhecer e se comprometer antes e depois das eleições.<br>
                                E para que eleitores escolham candidatos comprometidos com a democracia e com as Novas Medidas contra a Corrupção.<br>
                                Mas esse trabalho não se faz sozinho.<br>
                                Esquerda, direita, progressistas e conservadores.<br>
                                Todos importam na luta contra a corrupção.<br>
                                Vamos unir forças, apoiar novas medidas e dar fim a esse velho problema do Brasil. <br>
                                Unidos Contra a Corrupção.<br>
                                                                </p>
                                                                <br><br><br><br><br>
                            </div>

                        </div>
                        <div class="acabamento-texto-manifesto">w2w2w</div>
                    </div>


                    <a href="javascript:void(0);" class="lnk-abrir-manifesto" id="btVerManifestoDois">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                    </a>



                    <section id="as-novas-medidas" class="section-as-novas-medidas">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-xs-12 col-md-offset-2 col-md-8">
                                    <div class="cnt-logo"><img src="assets/img/log-as-novas-medidas.png" class="img-responsive"></div>
                                    <div class="cnt-logo-mobile"><img src="assets/img/logo-medidas-mobile.png" class="img-responsive"></div>
                                </div>

                                <div class="col-xs-12 col-md-offset-2 col-md-8">
                                    <div class="col-xs-6 col-md-3">
                                        <div class="cnt-icone">
                                            <img src="assets/img/novas-medidas-icone-1.png" class="img-responsive">
                                            <p>70 medidas divididas<br>em 12 blocos</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="cnt-icone">
                                            <img src="assets/img/novas-medidas-icone-2.png" class="img-responsive">
                                            <p>+200 especialistas, redatores<br>e revisores</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="cnt-icone">
                                            <img src="assets/img/novas-medidas-icone-3.png" class="img-responsive">
                                            <p>373 instituições<br>consultadas</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="cnt-icone">
                                            <img src="assets/img/novas-medidas-icone-4.png" class="img-responsive">
                                            <p>+900 participantes ativos<br>na consulta online</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </section>
        <!-- FIM MANIFESTO -->

        <!-- CONHEÇA AGORA -->
        <section class="section-conheca-agora">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <h2>Conheça agora</h2>
                    </div>

                    <!-- -->
                    <div class="clearfix"></div>
                    <!-- -->

                    <div class="cnt-medidas">
                        <!-- -->
                        <div class="col-xs-12 col-md-offset-2 col-md-8">

                            <div class="panel-group" id="accordion">

                                <div class="col-md-6">


                                    <div class="panel">

                                        <div class="lnk-medida">
                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">01</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Sistemas, conselhos e diretrizes nacionais anticorrupção</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad1" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida1" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleText()">
                                                            <div class="text" >LEIA</div>
                                                            <div class="text" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad1">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <p>O combate à corrupção não pode parar e tem de se aperfeiçoar sempre. Para que novas políticas públicas anticorrupção se mantenham na pauta do governo, este conjunto de medidas propõe a criação de um Sistema Nacional de Combate à Corrupção e Controle Social e também de um Conselho de Estado para harmonizar entendimentos. Além disso, propõe que as contratações públicas passem a ter seus dados reunidos em uma única plataforma eletrônica, ampliando competitividade, transparência e o controle social.</p>
                                                    <a href="assets/pdf/sumario-novasmedidas-bloco1.pdf" target="_blank" class="bt_download">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">02</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Participação e Controle Social</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida2" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextDois()">
                                                            <div class="text2" >LEIA</div>
                                                            <div class="text2" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad2">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <p>A participação da população é crucial para o combate da corrupção. Este conjunto de medidas propõe facilitar a proposição de leis de iniciativa popular, ampliar o acesso à informação e criar uma política nacional de dados abertos. Propõe também a garantia de proteção às pessoas que relatam suspeitas de irregularidades e o aperfeiçoamento da ação popular.</p>
                                                    <a href="assets/pdf/sumario-novasmedidas-bloco2.pdf" target="_blank" class="bt_download">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">03</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Prevenção da Corrupção</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad3" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida3" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextTres()">
                                                            <div class="text3" >LEIA</div>
                                                            <div class="text3" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad3">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Reduzir a burocracia também ajuda a prevenir a corrupção. Afinal, quanto menor o número de brechas e entraves no setor público, menores são as oportunidades para atos ilícitos. Este conjunto de medidas também propõe limitar a circulação de dinheiro em espécie (forma comum de pagamento de propina) e aumentar a transparência dos beneficiários finais de empresas, isto é, dar visibilidade aos seus verdadeiros donos.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco3.pdf" target="_blank" class="bt_download hvr-sweep-to-bottom">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">04</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Medidas anticorrupção para eleições e partidos políticos</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad4" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida4" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextQuatro()">
                                                            <div class="text4" >LEIA</div>
                                                            <div class="text4" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad4">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Partidos políticos são cruciais para a democracia. Este conjunto de medidas visa promover a transparência e a responsabilidade destas entidades. Propõe ainda alterações na lei eleitoral para torná-la mais efetiva, a extensão aos partidos de deveres de lei de combate à lavagem de dinheiro e a criminalização do caixa dois.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco4.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">05</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Responsabilização de agentes públicos</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad5" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida5" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextCinco()">
                                                            <div class="text5" >LEIA</div>
                                                            <div class="text5" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad5">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Atos de agentes públicos têm enorme repercussão sobre a sociedade. Por essa razão, este conjunto de medidas procura dar mais efetividade à responsabilização dessas pessoas via redução drástica do foro privilegiado, extinção da imunidade parlamentar contra prisão e criminalização do enriquecimento ilícito. Por outro lado, fixa também medidas de equilíbrio e proteções especiais ao cidadão que possa ser alvo da atuação indevida da Justiça. Busca aperfeiçoar, por fim, o sistema disciplinar de membros do Poder Judiciário e do Ministério Público (MP), com a abolição da aposentadoria compulsória como pena e a previsão de que juízes e membros do MP possam perder o cargo em ações criminais e de improbidade ou serem demitidos a partir de decisões de seus Conselhos Externos (CNJ e CNMP).</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco5.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">06</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Investidura e independência de agentes públicos</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad6" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida6" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextSeis()">
                                                            <div class="text6" >LEIA</div>
                                                            <div class="text6" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad6">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Este conjunto de medidas visa melhorar a seleção dos agentes públicos tanto para garantir maior imparcialidade e independência em sua atuação quanto para aperfeiçoar os quadros de servidores. Por isso, propõe critérios para seleção de membros dos Tribunais de Contas, maior transparência na escolha dos Ministros do Supremo Tribunal Federal, aperfeiçoamento da escolha de juízes de Tribunais Regionais Federais e dos processos seletivos para ocupantes de cargos em comissão. Na mesma linha, este bloco propõe estender a Lei da Ficha Limpa a todo o serviço público. São ampliadas também as garantias de imparcialidade e independência da Controladoria-Geral da União e do Conselho Administrativo de Defesa Econômica.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco6.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <!-- +++++++++++++++++++++++++++++++ -->
                                <!-- +++++++++++++++++++++++++++++++ -->

                                <div class="col-md-6">


                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">07</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Melhoria do Controle Interno e Externo</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad7" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida7" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextSete()">
                                                            <div class="text7" >LEIA</div>
                                                            <div class="text7" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad7">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Este bloco reconhece a importância do controle interno da atuação dos agentes públicos, aperfeiçoando mecanismos de ouvidoria, controladoria, auditoria governamental e correição. Esse mecanismos obtêm status constitucional, ganham órgãos de natureza permanente e passam a contar com incentivos para expansão de sua adoção nos municípios. Este conjunto de propostas prevê a criação de um sistema centralizado de informações patrimoniais e a realização, pelo Tribunal de Contas da União, de auditorias patrimoniais aleatórias sobre uma parte dos Ministros de Estado, membros do Congresso Nacional, do Ministério Público e da Magistratura, e demais servidores públicos.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco7.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">08</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Medidas anticorrupção no setor privado</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad8" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida8" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextOito()">
                                                            <div class="text8" >LEIA</div>
                                                            <div class="text8" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad8">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Este conjunto de medidas procura promover a integridade no setor privado. Para tanto, sugere regulamentar a prática do lobby e tornar obrigatórios os programas de compliance para companhias que queiram celebrar grandes contratos públicos. Propõe ainda que executivos sejam obrigados a devolver os bônus recebidos de suas empresas caso estejam envolvidos em casos de corrupção. Recomenda também criminalizar a corrupção privada, o que ainda não acontece no Brasil. Assim, pessoas físicas e jurídicas passarão a ser passíveis de punição por atos de corrupção ainda que ela não envolva nenhum servidor público.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco8.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">09</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Investigação</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad9" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida9" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextNove()">
                                                            <div class="text9" >LEIA</div>
                                                            <div class="text9" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad9">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Este bloco aprimora medidas de investigação, essenciais à detecção de irregularidades. Como esquemas de corrupção transnacionais têm se tornado mais comuns, são fortalecidos instrumentos de cooperação jurídica internacional e se facilita a criação de Equipes Conjuntas de Investigação. Sugerimos a introdução em nosso Direito daunexplained wealth order, que é um procedimento judicial em que se requer explicação sobre possível riqueza incompatível na posse de Pessoa Politicamente Exposta (PPEs) ou de pessoas vinculadas a atividades criminosas. São aperfeiçoados ainda os acordos de leniência da Lei Anticorrupção e da Lei de Improbidade. É resolvido também o problema de diversas investigações que incluem evidências de envolvimento em crimes de pessoas que têm foro privilegiado.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco9.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">10</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Aprimoramento da resposta do Estado à corrupção no âmbito penal e processual penal</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad10" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida10" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextDez()">
                                                            <div class="text10" >LEIA</div>
                                                            <div class="text10" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad10">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>A lentidão da Justiça brasileira e determinados dispositivos legais permitem a corruptos com poder econômico e político escaparem da punição ou conseguirem penas mais brandas. Para melhorar este quadro, este bloco de medidas propõe alterações nos recursos processuais penais sem restringir direitos fundamentais. Sugere mudanças no sistema de prescrição de penas, aproximando-o sistema dos modelos europeu e latino-americano. Propõe ainda a ampliação da pena mínima do crime de corrupção de 2 para 4 anos, sem alteração da máxima; o aumento da pena para crimes de colarinho branco quando o dano causado é superior a R$ 1 milhão; e a proibição da concessão de indulto ou comutação de pena para a corrupção.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco10.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">11</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Aprimoramento da resposta do Estado à corrupção no âmbito da improbidade administrativa</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad11" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida11" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextOnze()">
                                                            <div class="text11" >LEIA</div>
                                                            <div class="text11" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad11">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Este bloco de medidas procurar melhorar a resposta à corrupção no âmbito da improbidade administrativa. Dá-se um tratamento mais adequado a casos de ausência de prestação de contas. Para agilizar ações de improbidade, propõe-se a extinção da fase duplicada de defesa prévia e o aprofundamento da especialização de varas, aproveitando-se a experiência de sucesso que foram as varas especializadas em lavagem de dinheiro. É previsto o procedimento abreviado na Lei de Improbidade, existente em outros países, o qual permite a redução da pena do réu que confessar os fatos e entrar em acordo sobre suas consequências jurídicas. Sugere-se também a simplificação do sistema de prescrição da improbidade, que hoje faz remissão a centenas de leis estaduais e municipais, o que gera um tratamento desigual, a depender da carreira a que pertence o servidor público.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco11.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->
                                    <div class="clearfix"></div>
                                    <!-- -->

                                    <div class="panel">
                                        <div class="lnk-medida">

                                            <div class="col-sm-2">
                                                <div class="cnt-num-bloco">
                                                    <span class="txt-bloco">bloco</span>
                                                    <span class="num-bloco">12</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="cnt-titulo-bloco">
                                                    <span class="titulo-medida">Instrumentos de recuperação do dinheiro desviado</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cnt-btn-leia">
                                                    <div class="cnt-cnt">
                                                        <div href="#medidad12" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida12" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextDoze()">
                                                            <div class="text12" >LEIA</div>
                                                            <div class="text12" style="display:none">FECHAR</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="collapse" id="medidad12">
                                            <div class="box-integra-medida">
                                                <div class="texto-integra">
                                                    <div class="texto-integra">
                                                        <p>Ressarcir dinheiro desviado pela corrupção aos cofres públicos é essencial para inibir a conduta criminosa. Por essa razão, este bloco de medidas propõe incorporar ao Direito brasileiro instrumentos modernos que existem em outros países democráticos, como a ação civil de extinção de domínio e o confisco alargado. São aperfeiçoadas também normas para bloqueio de bens em ações de improbidade. É regulada ainda a possibilidade de execução civil, provisória, da sentença criminal, após o julgamento de segunda instância. Por fim, tendo por alvo um rastreamento mais eficiente de ativos, as medidas propõem que o juiz aplique multas sobre instituições financeiras que não atendam ordens de fornecimento de dados bancários.</p>
                                                        <a href="assets/pdf/sumario-novasmedidas-bloco12.pdf" target="_blank" class="bt_download">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>

<!--  -->
<!--  -->
<!--  -->

                    <div class="" style="padding:14px;">
                        <div class="col-xs-12 col-md-4">
                            <a href="assets/pdf/Novas_Medidas_resumo.pdf" target="_blank" class="lnk-baixar-arquivo-completo hvr-sweep-to-bottom" >BAIXE O RESUMO</a>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <a href="assets/pdf/Novas_Medidas_todos_os _blocos.pdf" target="_blank" class="lnk-baixar-arquivo-completo hvr-sweep-to-bottom" >BAIXE TODOS OS BLOCOS</a>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <a href="assets/pdf/Novas_Medidas_pacote_completo.pdf"  target="_blank" class="lnk-baixar-arquivo-completo hvr-sweep-to-bottom" >BAIXE O PACOTE COMPLETO</a>
                        </div>
                    </div>

                    </div>


                </div>
                  <!--  -->
            </div>
        </section>

        <!-- conheça agora mobile -->
        <section class="section-conheca-agora-mobile">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12">
                        <h2>Conheça agora</h2>
                    </div>

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <div class="panel-group" id="accordion">

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">01</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Sistemas, conselhos e diretrizes nacionais anticorrupção</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida1" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida1" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleText()">
                                                <div class="text" >LEIA</div>
                                                <div class="text" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida1">
                                    <div class="texto-integra">
                                        <p>O combate à corrupção não pode parar e tem de se aperfeiçoar sempre. Para que novas políticas públicas anticorrupção se mantenham na pauta do governo, este conjunto de medidas propõe a criação de um Sistema Nacional de Combate à Corrupção e Controle Social e também de um Conselho de Estado para harmonizar entendimentos. Além disso, propõe que as contratações públicas passem a ter seus dados reunidos em uma única plataforma eletrônica, ampliando competitividade, transparência e o controle social.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco1.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">02</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Participação e Controle Social</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida2" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextDois()">
                                                <div class="text2" >LEIA</div>
                                                <div class="text2" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida2">
                                    <div class="texto-integra">
                                        <p>A participação da população é crucial para o combate da corrupção. Este conjunto de medidas propõe facilitar a proposição de leis de iniciativa popular, ampliar o acesso à informação e criar uma política nacional de dados abertos. Propõe também a garantia de proteção às pessoas que relatam suspeitas de irregularidades e o aperfeiçoamento da ação popular.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco2.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">03</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Prevenção da Corrupção</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida3" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida3" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextTres()">
                                                <div class="text3" >LEIA</div>
                                                <div class="text3" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida3">
                                    <div class="texto-integra">
                                        <p>Reduzir a burocracia também ajuda a prevenir a corrupção. Afinal, quanto menor o número de brechas e entraves no setor público, menores são as oportunidades para atos ilícitos. Este conjunto de medidas também propõe limitar a circulação de dinheiro em espécie (forma comum de pagamento de propina) e aumentar a transparência dos beneficiários finais de empresas, isto é, dar visibilidade aos seus verdadeiros donos.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco3.pdf" target="_blank" class="bt_download hvr-sweep-to-bottom">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">04</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Medidas anticorrupção para eleições e partidos políticos</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida4" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida4" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextQuatro()">
                                                <div class="text4" >LEIA</div>
                                                <div class="text4" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida4">
                                    <div class="texto-integra">
                                        <p>Partidos políticos são cruciais para a democracia. Este conjunto de medidas visa promover a transparência e a responsabilidade destas entidades. Propõe ainda alterações na lei eleitoral para torná-la mais efetiva, a extensão aos partidos de deveres de lei de combate à lavagem de dinheiro e a criminalização do caixa dois.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco4.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">05</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Responsabilização de agentes públicos</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida5" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida5" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextCinco()">
                                                <div class="text5" >LEIA</div>
                                                <div class="text5" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida5">
                                    <div class="texto-integra">
                                        <p>Atos de agentes públicos têm enorme repercussão sobre a sociedade. Por essa razão, este conjunto de medidas procura dar mais efetividade à responsabilização dessas pessoas via redução drástica do foro privilegiado, extinção da imunidade parlamentar contra prisão e criminalização do enriquecimento ilícito. Por outro lado, fixa também medidas de equilíbrio e proteções especiais ao cidadão que possa ser alvo da atuação indevida da Justiça. Busca aperfeiçoar, por fim, o sistema disciplinar de membros do Poder Judiciário e do Ministério Público (MP), com a abolição da aposentadoria compulsória como pena e a previsão de que juízes e membros do MP possam perder o cargo em ações criminais e de improbidade ou serem demitidos a partir de decisões de seus Conselhos Externos (CNJ e CNMP).</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco5.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">06</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Investidura e independência de agentes públicos</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida6" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida6" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextSeis()">
                                                <div class="text6" >LEIA</div>
                                                <div class="text6" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida6">
                                    <div class="texto-integra">
                                        <p>Este conjunto de medidas visa melhorar a seleção dos agentes públicos tanto para garantir maior imparcialidade e independência em sua atuação quanto para aperfeiçoar os quadros de servidores. Por isso, propõe critérios para seleção de membros dos Tribunais de Contas, maior transparência na escolha dos Ministros do Supremo Tribunal Federal, aperfeiçoamento da escolha de juízes de Tribunais Regionais Federais e dos processos seletivos para ocupantes de cargos em comissão. Na mesma linha, este bloco propõe estender a Lei da Ficha Limpa a todo o serviço público. São ampliadas também as garantias de imparcialidade e independência da Controladoria-Geral da União e do Conselho Administrativo de Defesa Econômica.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco6.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">07</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Melhoria do Controle Interno e Externo</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida7" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida7" class="lnk-leia hvr-sweep-to-bottom" onclick="toggleTextSete()">
                                                <div class="text7" >LEIA</div>
                                                <div class="text7" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida7">
                                    <div class="texto-integra">
                                        <p>Este bloco reconhece a importância do controle interno da atuação dos agentes públicos, aperfeiçoando mecanismos de ouvidoria, controladoria, auditoria governamental e correição. Esse mecanismos obtêm status constitucional, ganham órgãos de natureza permanente e passam a contar com incentivos para expansão de sua adoção nos municípios. Este conjunto de propostas prevê a criação de um sistema centralizado de informações patrimoniais e a realização, pelo Tribunal de Contas da União, de auditorias patrimoniais aleatórias sobre uma parte dos Ministros de Estado, membros do Congresso Nacional, do Ministério Público e da Magistratura, e demais servidores públicos.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco7.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">08</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Medidas anticorrupção no setor privado</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida8" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida8" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextOito()">
                                                <div class="text8" >LEIA</div>
                                                <div class="text8" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida8">
                                    <div class="texto-integra">
                                        <p>Este conjunto de medidas procura promover a integridade no setor privado. Para tanto, sugere regulamentar a prática do lobby e tornar obrigatórios os programas de compliance para companhias que queiram celebrar grandes contratos públicos. Propõe ainda que executivos sejam obrigados a devolver os bônus recebidos de suas empresas caso estejam envolvidos em casos de corrupção. Recomenda também criminalizar a corrupção privada, o que ainda não acontece no Brasil. Assim, pessoas físicas e jurídicas passarão a ser passíveis de punição por atos de corrupção ainda que ela não envolva nenhum servidor público.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco8.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">09</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Investigação</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida9" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida9" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextNove()">
                                                <div class="text9" >LEIA</div>
                                                <div class="text9" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida9">
                                    <div class="texto-integra">
                                        <p>Este bloco aprimora medidas de investigação, essenciais à detecção de irregularidades. Como esquemas de corrupção transnacionais têm se tornado mais comuns, são fortalecidos instrumentos de cooperação jurídica internacional e se facilita a criação de Equipes Conjuntas de Investigação. Sugerimos a introdução em nosso Direito daunexplained wealth order, que é um procedimento judicial em que se requer explicação sobre possível riqueza incompatível na posse de Pessoa Politicamente Exposta (PPEs) ou de pessoas vinculadas a atividades criminosas. São aperfeiçoados ainda os acordos de leniência da Lei Anticorrupção e da Lei de Improbidade. É resolvido também o problema de diversas investigações que incluem evidências de envolvimento em crimes de pessoas que têm foro privilegiado.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco9.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">10</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Aprimoramento da resposta do Estado à corrupção no âmbito penal e processual penal</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida10" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida10" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextDez()">
                                                <div class="text10" >LEIA</div>
                                                <div class="text10" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida10">
                                    <div class="texto-integra">
                                        <p>A lentidão da Justiça brasileira e determinados dispositivos legais permitem a corruptos com poder econômico e político escaparem da punição ou conseguirem penas mais brandas. Para melhorar este quadro, este bloco de medidas propõe alterações nos recursos processuais penais sem restringir direitos fundamentais. Sugere mudanças no sistema de prescrição de penas, aproximando-o sistema dos modelos europeu e latino-americano. Propõe ainda a ampliação da pena mínima do crime de corrupção de 2 para 4 anos, sem alteração da máxima; o aumento da pena para crimes de colarinho branco quando o dano causado é superior a R$ 1 milhão; e a proibição da concessão de indulto ou comutação de pena para a corrupção.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco10.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">11</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Aprimoramento da resposta do Estado à corrupção no âmbito da improbidade administrativa</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida11" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida11" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextOnze()">
                                                <div class="text11" >LEIA</div>
                                                <div class="text11" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida11">
                                    <div class="texto-integra">
                                        <p>Este bloco de medidas procurar melhorar a resposta à corrupção no âmbito da improbidade administrativa. Dá-se um tratamento mais adequado a casos de ausência de prestação de contas. Para agilizar ações de improbidade, propõe-se a extinção da fase duplicada de defesa prévia e o aprofundamento da especialização de varas, aproveitando-se a experiência de sucesso que foram as varas especializadas em lavagem de dinheiro. É previsto o procedimento abreviado na Lei de Improbidade, existente em outros países, o qual permite a redução da pena do réu que confessar os fatos e entrar em acordo sobre suas consequências jurídicas. Sugere-se também a simplificação do sistema de prescrição da improbidade, que hoje faz remissão a centenas de leis estaduais e municipais, o que gera um tratamento desigual, a depender da carreira a que pertence o servidor público.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco11.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->

                            <div class="lnk-medida">
                                <div class="col-xs-2">
                                    <div class="cnt-num-bloco">
                                        <span class="txt-bloco">bloco</span>
                                        <span class="num-bloco">12</span>
                                    </div>
                                </div>

                                <div class="col-xs-8">
                                    <div class="cnt-titulo-bloco">
                                        <span class="titulo-medida">Instrumentos de recuperação do dinheiro desviado</span>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="cnt-btn-leia">
                                        <div class="cnt-cnt">
                                            <div href="#medida12" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="medida12" class="lnk-leia hvr-sweep-to-bottom"  onclick="toggleTextDoze()">
                                                <div class="text12" >LEIA</div>
                                                <div class="text12" style="display:none">FECHAR</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="collapse box-integra-medida" id="medida12">
                                    <div class="texto-integra">
                                        <p>Ressarcir dinheiro desviado pela corrupção aos cofres públicos é essencial para inibir a conduta criminosa. Por essa razão, este bloco de medidas propõe incorporar ao Direito brasileiro instrumentos modernos que existem em outros países democráticos, como a ação civil de extinção de domínio e o confisco alargado. São aperfeiçoadas também normas para bloqueio de bens em ações de improbidade. É regulada ainda a possibilidade de execução civil, provisória, da sentença criminal, após o julgamento de segunda instância. Por fim, tendo por alvo um rastreamento mais eficiente de ativos, as medidas propõem que o juiz aplique multas sobre instituições financeiras que não atendam ordens de fornecimento de dados bancários.</p>
                                        <a href="assets/pdf/sumario-novasmedidas-bloco12.pdf" target="_blank" class="bt_download">Download</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                        <div class="col-xs-12 col-md-4">
                            <a href="assets/pdf/Novas_Medidas_resumo.pdf" target="_blank" class="lnk-baixar-arquivo-completo hvr-sweep-to-bottom"  onkeyup="">BAIXE O RESUMO</a>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <a href="assets/pdf/Novas_Medidas_todos_os _blocos.pdf" target="_blank" class="lnk-baixar-arquivo-completo hvr-sweep-to-bottom"  onkeyup="">BAIXE TODOS OS BLOCOS</a>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <a href="assets/pdf/Novas_Medidas_pacote_completo.pdf"  target="_blank" class="lnk-baixar-arquivo-completo hvr-sweep-to-bottom"  onkeyup="">BAIXE O PACOTE COMPLETO</a>
                        </div>




                </div>
            </div>
        </section>
        <!-- fim conheça agora mobile -->
        <!-- FIM CONHEÇA AGORA -->

        <!-- COMO POSSO ME UNIR -->
        <div class="section-unir" id="okRespForm">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-offset-1 col-md-10">

                        <h2>Como posso me unir?</h2>

                        <div class="cnt-etapas">

                            <div class="col-xs-12 col-md-4">

                                <div class="etapa-assine">

                                    <div id="frmRespdois">
                                        <img src="assets/img/resp-formulariodois.png" class="img-responsive">
                                    </div>

                                    <div id="frmDois">
                                        <div class="titulo">
                                            1.Assine
                                        </div>
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                            <div class="form-group">
                                                <input type="hidden" id="identificador" name="identificador" value="Assinatura segundo formulario" >
                                                <input type="text" class="form-control" name="nome" id="exampleInput" placeholder="NOME" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="exampleInput" placeholder="E-MAIL" required>
                                            </div>
                                            <div class="col-xs-12">
                                                <div style="display: block; position: relative; margin-top: 5px; margin-left: -12px;">
                                                    <input type="checkbox" id="c5" value="Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o." name="optin" />
                                                    <label for="c5"><span></span>Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o.</label>
                                                    <!-- <input type="checkbox" value="2" required name="privacy"> -->
                                                </div>
                                                <!--
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o." name="optin">
                                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Eu aceito receber notícias sobre o combate à corrupção.
                                                    </label>
                                                </div>
                                                -->
                                            </div>
                                            <div class="clearfix" style="margin-bottom: 20px;"></div>
                                            <div class="col-xs-12">
                                                <div style="display: block; position: relative; margin-top: 5px; margin-left: -12px;">
                                                    <input type="checkbox" id="c2" required name="privacy" />
                                                    <label for="c2"><span></span>Concordo e aceito os <a href="javascript:void();" class="open_modal">termos de privacidade</a> da campanha: Unidos contra a Corrupção.</label>
                                                    <!-- <input type="checkbox" value="2" required name="privacy"> -->
                                                </div>
                                            </div>
                                            <div class="clearfix" style="margin-bottom: 20px;"></div>
                                            <button type="submit" class="btn btn-default hvr-sweep-to-bottom">UNA-SE AGORA</button>
                                        </form>
                                    </div>

                                </div>

                            </div>

                            <div class="col-xs-12 col-md-4">
                                <a href="javascript:void(0);"  id="divulgue">&nbsp;</a>
                                <div class="etapa-divulgue">
                                    <div class="titulo">
                                        2. Divulgue
                                    </div>
                                    <div class="botoes">
                                        <a href="https://web.whatsapp.com/send?text=Conhe%C3%A7a%20as%20Novas%20Medidas%20Contra%20a%20Corrup%C3%A7%C3%A3o%20e%20fa%C3%A7a%20parte%20da%20maior%20uni%C3%A3o%20anticorrup%C3%A7%C3%A3o%20que%20o%20pa%C3%ADs%20j%C3%A1%20viu%20%23UnidosContraaCorrup%C3%A7%C3%A3o%20%20http%3A%2F%2Funidoscontraacorrupcao.org.br%2F" target="_blank" id="whatsCompartilha"><img src="assets/img/bt-compartilhar-whatsapp.jpg" class="img-responsive"></a>
                                        <br><br>
                                        <a href="http://www.facebook.com/sharer.php?u=http://unidoscontraacorrupcao.org.br" target="_blank"><img src="assets/img/bt-compartilhar-facebook.jpg" class="img-responsive"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-12 col-md-4">

                                <a href="javascript:void(0);"  id="mobilize">&nbsp;</a>
                                <div class="etapa-mobilize">

                                    <div id="frmResptres">
                                        <img src="assets/img/resp-formulariotres.png" class="img-responsive">
                                    </div>

                                    <div id="frmTres">
                                        <div class="titulo">
                                            3. Mobilize
                                        </div>
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                            <div class="form-group">
                                                <label class="tlt"> Monte um time para mobilizar em sua cidade. Deixe seu contato que te ajudaremos.</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" id="identificador" name="identificador" value="Mobilize" >
                                                <input type="text" name="nome" class="form-control" id="exampleInput" placeholder="NOME">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" id="exampleInput" placeholder="E-MAIL">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="cep" class="form-control" id="exampleInput" placeholder="CEP">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="celular" class="form-control" id="exampleInput" placeholder="CELULAR">
                                            </div>
                                            <div class="col-xs-12">
                                                <div style="display: block; position: relative; margin-top: 5px; margin-left: -12px;">
                                                    <input type="checkbox" id="c6" value="Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o." name="optin" />
                                                    <label for="c6"><span></span>Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o.</label>
                                                    <!-- <input type="checkbox" value="2" required name="privacy"> -->
                                                </div>
                                                <!--
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Eu aceito receber notícias sobre o combate à corrup&ccedil;&atilde;o." name="optin">
                                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Eu aceito receber notícias sobre o combate à corrupção.
                                                    </label>
                                                </div>
                                                -->
                                            </div>
                                            <div class="clearfix" style="margin-bottom: 40px;"></div>
                                            <div class="col-xs-12">
                                                <div style="display: block; position: relative; margin-top: 5px; margin-left: -12px;">
                                                    <input type="checkbox" id="c3" required name="privacy" />
                                                    <label for="c3"><span></span>Concordo e aceito os <a href="javascript:void();" class="open_modal">termos de privacidade</a> da campanha: Unidos contra a Corrupção.</label>
                                                    <!-- <input type="checkbox" value="2" required name="privacy"> -->
                                                </div>
                                            </div>
                                            <div class="clearfix" style="margin-bottom: 20px;"></div>
                                            <button type="submit" class="btn btn-default hvr-sweep-to-bottom">MOBILIZAR</button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="acabamento-section"></div>

                </div>
            </div>
        </div>
        <!-- FIM COMO POSSO ME UNIR -->
       <!-- MOBILIZE -->
        <section id="mobilize" class="section-mobilize">
            <div cass="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <h2>Downloads</h2>
                        <h3>Baixe os materiais da campanha. Existem diversas formas de participar. Além de pressionar, você pode divulgar o movimento em sua cidade e nas redes sociais. 
                        </h3>

                        <p style="color:#fff; margin-top: -40px;">
                            Esta obra está licenciada com uma Licença Creative Commons Atribuição-NãoComercial-CompartilhaIgual 4.0 Internacional.
                            Caso você trabalhe em uma empresa, entre em contato com campanha@br.transparency.org antes de usar essas obras em materiais externos.
                        </p><br><br>

                        <!-- <p style="color:#fff; margin-top: -40px;">Ao baixar quaisquer arquivos deste website, você concorda com a política de licenciamento internacional da Creative Commons. <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />Este obra está licenciado com uma Licença <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Atribuição-NãoComercial-CompartilhaIgual 4.0 Internacional</a></p><br><br> -->

                    </div>

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <div class="cnt-thumbs">

                            <div class="col-xs-3 col-sm-1 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Camisetas</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/CAMISETA.zip" class="">
                                    <img src="assets/img/thumb-01.jpg" class="img-responsive">
                                </a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/CAMISETA.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Bottons</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/BOTTOM.zip" class=""><img src="assets/img/thumb-02.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/BOTTOM.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Cartazes</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/CARTAZ_A3__.zip" class=""><img src="assets/img/thumb-03.png" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/CARTAZ_A3__.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Adesivos</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/ADESIVOS.zip" ><img src="assets/img/thumb-04.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/ADESIVOS.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->
                            <div class="divisoria"></div>
                            <!-- -->

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Bandeira</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/BANDEIRA.zip" ><img src="assets/img/thumb-05.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/BANDEIRA.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Posts</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/POST_FB.png" download="POST_FB.png" ><img src="assets/img/thumb-06.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/POST_FB.png" class="lnk-download hvr-sweep-to-bottom" download="POST_FB.png">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Stories</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/STORIES.zip" ><img src="assets/img/thumb-07.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/STORIES.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Banners Digitais</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/BANNERS.zip" ><img src="assets/img/thumb-08.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/BANNERS.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->
                            <div class="divisoria"></div>
                            <!-- -->

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Assinatura</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/ASSINATURA_EMAIL.png"  download="ASSINATURA_EMAIL.jpg"><img src="assets/img/thumb-09.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/ASSINATURA_EMAIL.png"  download="ASSINATURA_EMAIL.jpg"class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Cover Facebook</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/fb_COVER.png" download="fb_COVER.png"  ><img src="assets/img/thumb-10.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/fb_COVER.png" download="fb_COVER.png"  class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Tema Avatar Facebook</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="https://www.facebook.com/profilepicframes/?selected_overlay_id=197754787522882" ><img src="assets/img/thumb-11.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="https://www.facebook.com/profilepicframes/?selected_overlay_id=197754787522882" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-full color-rosa">Sugestões</div>
                                </div>
                                <a href="mailto:campanha@br.transparency.org;"><img src="assets/img/thumb-12.jpg" class="img-responsive"></a>
                                <!--
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/TEMA_AVATAR_FACEBOOK.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                                -->
                            </div>

                            <!--
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-full color-rosa">Sugestões</div>
                                </div>
                                <div class="thumb-sugestoes">
                                    Caso você tenha sentido falta de algum material ou queira organizar um evento da campanha na sua cidade, entre em contato por e-mail em <a href="mailto:campanha@br.transparency.org;">unidoscontracorrupcao@<br>br.transparency.org</a>
                                </div>
                            </div>
                            -->

                        </div>
                    </div>

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <div class="cnt-cross">
                            <img src="assets/img/img-cross.png">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Mobilize Mobile  -->
        <section id="mobilizeMob" class="section-mobilize-mobile">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <h2>Mobilize</h2>
                        <h3>Existem diversas formas de participar dessa campanha. Além de pressionar, você pode divulgar o movimento em sua cidade e nas redes sociais. Abaixo colocamos arquivos para você fazer download e usar à vontade.
                        </h3>

                        <p style="color:#fff; margin-top: -40px;">
                            Esta obra está licenciada com uma Licença Creative Commons Atribuição-NãoComercial-CompartilhaIgual 4.0 Internacional.
                            Caso você trabalhe em uma empresa, entre em contato com campanha@br.transparency.org antes de usar essas obras em materiais externos.</a>
                        </p><br><br>

                        <!-- <p style="color:#fff; margin-top: -40px;">Ao baixar quaisquer arquivos deste website, você concorda com a política de licenciamento internacional da Creative Commons. <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />Este obra está licenciado com uma Licença <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Atribuição-NãoComercial-CompartilhaIgual 4.0 Internacional</a></p><br><br> -->

                    </div>

                    <div class="owl-carousel owl-theme cnt-thumbs-mobile">

                        <div class="item">
                            <div class="col-xs-12">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Camisetas</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/CAMISETA.zip" class=""><img src="assets/img/thumb-01.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/CAMISETA.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Bottons</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/BOTTOM.zip" class=""><img src="assets/img/thumb-02.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/BOTTOM.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Cartazes</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/CARTAZ_A3__.zip" class=""><img src="assets/img/thumb-03.png" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/CARTAZ_A3__.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Adesivos</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/ADESIVOS.zip" ><img src="assets/img/thumb-04.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/ADESIVOS.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Bandeira</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/BANDEIRA.zip" ><img src="assets/img/thumb-05.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/BANDEIRA.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Posts</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/POST_FB.png" download="POST_FB.png" ><img src="assets/img/thumb-06.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/POST_FB.png" class="lnk-download hvr-sweep-to-bottom" download="POST_FB.png">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Stories</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/STORIES.zip" ><img src="assets/img/thumb-07.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/STORIES.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Banners Digitais</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/BANNERS.zip" ><img src="assets/img/thumb-08.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/BANNERS.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Assinatura</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="assets/zip/ASSINATURA_EMAIL.png"  download="ASSINATURA_EMAIL.jpg"><img src="assets/img/thumb-09.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/ASSINATURA_EMAIL.png"  download="ASSINATURA_EMAIL.jpg"class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-rosa">Cover Facebook</div>
                                    <div class="topo-r borda-top-azul-light">&nbsp;</div>
                                </div>
                                <a href="assets/zip/fb_COVER.png" download="fb_COVER.png"  ><img src="assets/img/thumb-10.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-rosa">&nbsp;</div>
                                    <div class="topo-r color-azul-light">
                                        <a href="assets/zip/fb_COVER.png" download="fb_COVER.png"  class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-l color-azul-light">Tema Avatar Fecabook</div>
                                    <div class="topo-r borda-top-rosa">&nbsp;</div>
                                </div>
                                <a href="https://www.facebook.com/profilepicframes/?selected_overlay_id=197754787522882" ><img src="assets/img/thumb-11.jpg" class="img-responsive"></a>
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="https://www.facebook.com/profilepicframes/?selected_overlay_id=197754787522882" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-md-3">
                                <div class="thumb-topo">
                                    <div class="topo-full color-rosa">Sugestões</div>
                                </div>
                                <a href="mailto:campanha@br.transparency.org;"><img src="assets/img/thumb-12.jpg" class="img-responsive"></a>
                                <!--
                                <div class="thumb-rodape">
                                    <div class="topo-l borda-bottom-azul-light">&nbsp;</div>
                                    <div class="topo-r color-rosa">
                                        <a href="assets/zip/TEMA_AVATAR_FACEBOOK.zip" class="lnk-download hvr-sweep-to-bottom">download</a>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12">
                        <div class="cnt-cross">
                            <img src="assets/img/img-cross.png">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Fim Mobilize Mobile  -->
        <!-- FIM MOBILIZE -->

        <!-- PARCEIROS -->
        <section class="section-parceiros">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-md-offset-2 col-md-8">
                        <h2>UNIDOS CONTRA A CORRUPÇÃO É COORDENADA POR UMA COALIZÃO DE ORGANIZAÇÕES E MOVIMENTOS SEM VÍNCULOS PARTIDÁRIOS E CONTA COM O APOIO DE DIVERSAS INSTITUIÇÕES E PESSOAS DE DIFERENTES OPINIÕES E IDEOLOGIAS. BUSCAMOS COMBATER A CORRUPÇÃO ATRAVÉS DA UNIÃO E COM ESPÍRITO DEMOCRÁTICO.</h2>
                    </div>

                    <div class="col-xs-12">
                        <div class="cnt-logos-parceiros">
                            <div class="col-md-2 col-sm-4 col-xs-6"><a href="http://www.contasabertas.com.br/" target="_blank"><img src="assets/img/Golo_01.png" alt="" class="img-responsive"></a></div>
                            <div class="col-md-2 col-sm-4 col-xs-6"><a href="https://instituto.cidadedemocratica.org.br/" target="_blank"><img src="assets/img/Golo_02.png" alt="" class="img-responsive"></a></div>
                            <div class="col-md-2 col-sm-4 col-xs-6"><a href="https://www3.ethos.org.br/" target="_blank"><img src="assets/img/Golo_03.png" alt="" class="img-responsive"></a></div>
                            <div class="col-md-2 col-sm-4 col-xs-6"><a href="http://www.mcce.org.br/" target="_blank"><img src="assets/img/Golo_04.png" alt="" class="img-responsive"></a></div>
                            <div class="col-md-2 col-sm-4 col-xs-6"><a href="http://osbrasil.org.br/" target="_blank"><img src="assets/img/Golo_05.png" alt="" class="img-responsive"></a></div>
                            <div class="col-md-2 col-sm-4 col-xs-6"><a href="http://transparenciainternacional.org.br" target="_blank"><img src="assets/img/Golo_06.png" alt="" class="img-responsive"></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- FIM PARCEIROS -->

        <!-- FOOTER -->
        <footer>
            <div class="container-fluid" id="footer">
                <div class="row">

                    <div class="col-xs-12 col-md-12 cnt-mn">
                        <a href="#ti" class="scrollSuave "><img src="assets/img/logo-rodape.jpg" class="img-responsive" style="height:90px;"></a>
                    </div>

                </div>
            </div>
        </footer>
        <!-- FIM FOOTER -->

        <!-- INICIO MODAL TERMOS DE RESPONSABILIDADE -->
        <div class="bg_modal"></div>
        <div class="box_modal"><div class="close_modal">FECHAR X</div>

            <h2>POLÍTICA DE PRIVACIDADE E TERMOS DE USO TRANSPARÊNCIA INTERNACIONAL BRASIL
            </h2>
            <p>
            A ASSOCIAÇÃO TRANSPARÊNCIA E INTEGRIDADE, conhecida como “Transparência Internacional Brasil”, é uma associação brasileira, sem fins lucrativos e de caráter filantrópico, inscrita sob CNPJ no 26.219.946/0001-37 e regulamentada de
            acordo com o Código Civil Brasileiro (artigos 44 a 69).
            </p>
            <p>
            A Transparência Internacional Brasil se compromete com sua privacidade e seu conforto na internet. As informações nessa página tratam [1] dos dados que coletamos em suas visitas a este e os demais sites que gerenciamos; [2] dados pessoais informados por você à Transparência Internacional Brasil; [3] informações coletadas junto a empresas de enriquecimento e locação de dados; [4] e, principalmente, sobre nosso compromisso com sua privacidade e o sigilo dos seus dados.
            </p>
            <p>
            Podemos atualizar estes termos sempre que for necessário, considerando, mas não se limitando, a contratação de novos serviços, evolução das tecnologias já utilizadas, mudanças em nossa Política de Doação e a legislação em vigor.
            </p>
            <p>
            Ao utilizar esse e os demais sites gerenciados pela Transparência Internacional Brasil, realizar doações financeiras para a Transparência Internacional Brasil, participar de nossas ações de voluntariado ou consumir outros conteúdos gerados pela Transparência Internacional Brasil, você declara estar de acordo com nossos termos de uso e esta política de privacidade.
            </p>
            <h2>
            COLETA DE DADOS
            </h2>
            <p>
            Coletamos dados de acesso e utilização de nossos sites apenas para fins estatísticos. O uso de cookies e pixels de acompanhamento se destinam exclusivamente ao aperfeiçoamento de nossas ações de marketing e captação de recursos. Durante sua visita, não coletamos informações pessoais e dados particulares. Essas informações só são registradas em nossos bancos de dados quando você preenche um formulário e, espontaneamente, as fornece para a Transparência Internacional Brasil.
            </p>
            <p>
            Podemos utilizar os serviços de enriquecimento e limpeza de banco de dados de empresas homologadas e com permissão legal para prestar este tipo de serviço. A captura de novas informações se destina exclusivamente à melhora no processo de comunicação entre a Transparência Internacional Brasil e você.
            </p>
            <p>
            Da mesma forma, podemos alugar novas listas de fornecedores com autorização para utilizar seus dados – principalmente, mas não apenas, para envio de mala direta e e-mail marketing. Esses dados só ficarão armazenados nos bancos de dados da Transparência Internacional Brasil para que não sejam enviadas comunicações abusivas caso você não responda à primeira mensagem. A responsabilidade pela captura inicial de seus dados é da empresa fornecedora da lista e você poderá solicitar mais informações à Transparência Internacional Brasil a qualquer momento.
            </p>
            <h2>
                UTILIZAÇÃO DAS INFORMAÇÕES
            </h2>

            <p>
            Ao se cadastrar em uma lista da Transparência Internacional Brasil, podemos enviar e-mails, cartas e mensagens de texto (SMS) para fins de mobilização, divulgação e captação de recursos da própria Transparência Internacional Brasil ou de projetos que apoiamos.
            </p>
            <p>
            Não enviaremos comunicações que não sejam relacionadas à Transparência Internacional Brasil, ações de combate à corrupção ou mensagens abusivas.
            </p>
            <p>
            Todas as informações captadas durante seu acesso aos sites gerenciados pela Transparência Internacional Brasil, em ações de marketing e captação de recursos e eventos serão utilizadas apenas pela Transparência Internacional Brasil. Esses dados não serão, em hipótese alguma, vendidos, alugados ou cedidos a terceiros.
            </p>
            <h2>
            ENVIO DE MENSAGENS DE TEXTO (SMS)
            </h2>
            <p>
            A Transparência Internacional Brasil utiliza os serviços de envio de SMS marketing de empresas especializadas e que respeitam a legislação em vigor. Podemos entrar em contato por telefone ou por mensagem de texto de segunda a sexta-feira, das 09h às 20h e aos sábados, das 10h às 16h, exceto em feriados nacionais.
            </p>
            <p>
            Ao se cadastrar em uma ficha de filiação da Transparência Internacional Brasil (https://doe.transparenciainternacional.org.br), você poderá receber uma mensagem de texto de confirmação em seu celular em até 30 minutos, mesmo fora do horário acima estipulado.
            </p>
            <h2p>
            ACESSO AOS SEUS DADOS
            </h2>
            <p>
            Você pode solicitar uma cópia dos seus dados a qualquer momento, através do e-mail
            relacionamento@transparenciainternacional.org.br. No entanto, esses dados precisam
            ser solicitados por você e não serão entregues a parentes ou assessores/secretários.
            </p>
            <h2>
            SEGURANÇA DA INFORMAÇÃO
            </h2>
            <p>
            Todos os dados em poder da Transparência Internacional Brasil são armazenados em servidores seguros e criptografados, cujo acesso só é permitido a funcionários da Transparência Internacional Brasil capacitados a gerenciá-los com segurança ou fornecedores com contratos de confidencialidade.
            </p>
            <p>
            Em todas as páginas em que informações financeiras possam ser transmitidas, um certificado de criptografia de alto nível estará instalado e homologado por uma empresa reconhecida para este fim (Thawte EV SSL CA- G3).

            </p>
            <h2>

            EXCLUSÃO DE DADOS
            </h2>
            <p>
            Você pode solicitar a exclusão do envio de mensagens a qualquer momento, clicando no link “descadastrar endereço” no rodapé de nossos e-mails, respondendo um SMS com a palavra “SAIR” ou entrando em contato com nosso Canal de Relacionamento com Doadores, através do e-mail relacionamento@transparenciainternacional.org.br.
            </p>
            <h2>
            REDES SOCIAIS
            </h2>
            <p>
            A Transparência Internacional Brasil está presente na seguinte rede social:
            </p>
            <p>
            Facebook (https://www.facebook.com/<br>transparenciainternacional)
            </p>
            <p>
            Acreditamos a liberdade de expressão que faz parte do processo para construirmos uma sociedade cada vez mais aberta e igual para todos. Por isso, não excluiremos comentários postados em redes sociais sobre os posicionamentos e ações da Transparência Internacional Brasil.
            </p>
            <p>
            Apenas mensagens abusivas, de cunho comercial, com conteúdo impróprio, palavras de baixo calão, com ataques pessoais ou a grupos específicos serão excluídas e o usuário poderá ser banido de nossas páginas.
            </p>
            <h2>
            SITES GERENCIADOS PELA TRANSPARÊNCIA INTERNACIONAL BRASIL
            </h2>
            <p>
            Abaixo, a lista de sites gerenciados pela Transparência Internacional Brasil e representados por esta Política de Privacidade:
            <ul>
            <li>transparenciainternacional.org.br;</li>
            <li>doe.transparenciainternacional.org.br;</li>
            <li>novasmedidas.transparenciainternacional.org.br;</li>
            <li>transparenciainternacional.com.br;</li>
            <li>transparenciacorporativa.org.br;</li>
            <li>trac.transparenciainternacional.org.br;</li>
            <li>cmal.transparenciainternacional.org.br;</li>
            <li>quemmoraaolado.org.br;</li>
            <li>unidoscontraacorrupcao.org.br</li>
            </ul>
            <h2>
            GERAL</h2>

            <p>
            Política de Privacidade atualizada em 25/05/2018.
            </p>
            <p>
            www.transparenciainternacional.org.br/politica-de-privacidade
            </p>

        </div>
        <!-- FIM MODAL TERMOS DE RESPONSABILIDADE -->





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="resources/bootstrap/js/bootstrap.min.js"></script>

        <!-- Owlcarousel JS -->
        <script src="resources/owlcarousel/owl.carousel.js"></script>

        <!-- Custom Js -->
        <script src="assets/js/script-bottom.js"></script>

        <!-- Lightbox Library Js -->
        <script type="text/javascript" src="resources/lightboxvideo/js/jquery.flashy.js"></script>
        <script type="text/javascript" src="resources/lightboxvideo/js/main.js"></script>

        <script src="assets/js/jquery-modal-video.min.js"></script>

        <!-- Send mail Js -->
        <script type='text/javascript'>
            $(document).ready(function () {
                var value = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
                var msg = '  ';
                if(value.indexOf('mensagem') > '-1')
                {
                    if(value.indexOf('ok') > '-1'){
                    //msg = 'Mensagem enviada com sucesso. Obrigado pelo contato!';
                    $('#frmPrinc').css("display", "none");
                    $('#frmResp').css("display", "block");
                    }
                    if(value.indexOf('ok') == '-1'){
                    msg='Ocorreu um erro ao tentar enviar a mensagem, por favor tente novamente mais tarde.';
                    }
                }

                // dois
                var value = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
                var msg = '  ';
                if(value.indexOf('mensagemdois') > '-1')
                {
                    if(value.indexOf('okdois') > '-1'){
                    //msg = 'Mensagem enviada com sucesso. Obrigado pelo contato!';
                    //$('#frmPrinc').css("display", "none");
                    //$('#frmResp').css("display", "block");
                    $('#frmDois').css("display", "none");
                    $('#frmRespdois').css("display", "block");
                    }
                    if(value.indexOf('okdois') == '-1'){
                    msg='Ocorreu um erro ao tentar enviar a mensagem, por favor tente novamente mais tarde.';
                    }
                }

                // três
                var value = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
                var msg = '  ';
                if(value.indexOf('mensagemtres') > '-1')
                {
                    if(value.indexOf('oktres') > '-1'){
                    //msg = 'Mensagem enviada com sucesso. Obrigado pelo contato!';
                    //$('#frmPrinc').css("display", "none");
                    //$('#frmResp').css("display", "block");
                    $('#frmTres').css("display", "none");
                    $('#frmResptres').css("display", "block");
                    }
                    if(value.indexOf('oktres') == '-1'){
                    msg='Ocorreu um erro ao tentar enviar a mensagem, por favor tente novamente mais tarde.';
                    }
                }
            });
       </script>

        <script>
            function toggleText() {
                $('.text').toggle();
            }
            function toggleTextDois() {
                $('.text2').toggle();
            }
            function toggleTextTres() {
                $('.text3').toggle();
            }
            function toggleTextQuatro() {
                $('.text4').toggle();
            }
            function toggleTextCinco() {
                $('.text5').toggle();
            }
            function toggleTextSeis() {
                $('.text6').toggle();
            }
            function toggleTextSete() {
                $('.text7').toggle();
            }
            function toggleTextOito() {
                $('.text8').toggle();
            }
            function toggleTextNove() {
                $('.text9').toggle();
            }
            function toggleTextDez() {
                $('.text10').toggle();
            }
            function toggleTextOnze() {
                $('.text11').toggle();
            }
            function toggleTextDoze() {
                $('.text12').toggle();
            }
        </script>


    </body>
</html>
