<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>uniangola</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Carregando...</span>
        </div>
    </div>
    


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img/log.png" style="max-width:100%; width:70px; margin-bottom:20px; padding:10px"> </i>IASD-MR</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Página Inicial</a>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quem somos</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="index.php?esc=include/nossa_historia.php" class="dropdown-item">Nossa História</a>
                        <a href="index.php?esc=include/nossas_crencas.php" class="dropdown-item">Nossas Crenças</a>
                        <a href="index.php?esc=include/missao.php" class="dropdown-item">Nossa Missão</a>
                    </div> 
                </div>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Departamentos</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="index.php?esc=include/presidencia.php" class="dropdown-item">Presidência</a>
                        <a href="index.php?esc=include/jovens.php" class="dropdown-item">Jovens</a>
                        <a href="index.php?esc=include/musica.php" class="dropdown-item">Música</a>
                        <a href="index.php?esc=include/familia.php" class="dropdown-item">Família</a>
                        <a href="index.php?esc=include/saude.php" class="dropdown-item">Saúde</a>
                        <a href="index.php?esc=include/mordomia.php" class="dropdown-item">Mordomia</a>
                        <a href="index.php?esc=include/financeiro.php" class="dropdown-item">Financeiro</a>
                        <a href="index.php?esc=include/colportagem.php" class="dropdown-item">Colportagem</a>
                        <a href="index.php?esc=include/ass_social.php" class="dropdown-item">Assistencia social</a>
                        <a href="index.php?esc=include/escola_sabatina.php" class="dropdown-item">Escola sabatina</a>
                        <a href="index.php?esc=include/evangelismo.php" class="dropdown-item">Evangelismo</a>
                        <a href="index.php?esc=include/mulher.php" class="dropdown-item">Mulher</a>
                    </div>                               
                               
                </div>
                <a href="#" class="nav-item nav-link">Eventos</a>
               
                <a href="#" class="nav-item nav-link">Contactos</a>
            </div>
            <a href="cadastro.php" target="_blank|_self" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscrição ao congresso<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            
             <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/capa-congresso.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Congresso Internacional da Joventude</h5>
                                <h1 class="display-3 text-white animated slideInDown">No limiar da eternidade</h1>
                                <p class="fs-5 text-white mb-4 pb-2">A Igreja Adventista do 7º dia Movimento de Reforma Realiza congresso internacional da juventude , nos dias 18 a 24 de Dezembro de 2023 em ANgola na Cidade de Luanda. Não perca essa oportunidade de Reavivamento espiritual</p>
                                <a href="congresso2023.html" class="btn btn-warning py-md-3 px-md-5 me-3 animated slideInLeft" target="_blank">Saber mais <i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Igreja Adventista do 7º dia Movimento de Reforma em Angola</h5>
                                <h1 class="display-3 text-white animated slideInDown">Locas:10:2</h1>
                                <p class="fs-5 text-white mb-4 pb-2">A seara é grande, mas os trabalhadores são poucos. Rogai, pois, ao Senhor da plantação que mande obreiros para fazerem a colheita.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Saber mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/capa.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Consagração de Crianças em Angola</h5>
                                <h1 class="display-3 text-white animated slideInDown">Mateus 19:14</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Deixem vir a mim as crianças e não as impeçam; pois o Reino dos céus pertence aos que são semelhantes a elas.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Saber mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
    <!-- Carousel End -->