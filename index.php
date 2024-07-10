<?php 
// menu painel

    $menu1 = 'home';
    $menu2 = 'presidencia';
    $menu3 = 'jovens';
    $menu4 = 'musica';
    $menu5 = 'familia';
    $menu6 = 'saude';
    $menu7 = 'mordomia';
    $menu8 = 'financeiro';
    $menu9 = 'colportagem';
    $menu10 = 'ass_social';
    $menu11 = 'escola_sabatina';
    $menu12 = 'evangelismo';
    $menu13 = 'mulher';

    if(@$_GET['pag'] == ""){
    $pag = $menu1;
} else{
    $pag = @$_GET['pag'];
}


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>uniangola</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
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
                        <a href="#" class="dropdown-item">Nossa História</a>
                        <a href="#" class="dropdown-item">Nossas Crenças</a>
                        <a href="#" class="dropdown-item">Nossa Missão</a>
                    </div> 
                </div>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Departamentos</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="index.php?pag=<?php echo $menu2 ?>" class="dropdown-item">Presidência</a>
                        <a href="index.php?pag=<?php echo $menu3 ?>" class="dropdown-item">Jovens</a>
                        <a href="index.php?pag=<?php echo $menu4 ?>" class="dropdown-item">Música</a>
                        <a href="index.php?pag=<?php echo $menu5 ?>" class="dropdown-item">Família</a>
                        <a href="index.php?pag=<?php echo $menu6 ?>" class="dropdown-item">Saúde</a>
                        <a href="index.php?pag=<?php echo $menu7 ?>" class="dropdown-item">Mordomia</a>
                        <a href="index.php?pag=<?php echo $menu8 ?>" class="dropdown-item">Financeiro</a>
                        <a href="index.php?pag=<?php echo $menu9 ?>" class="dropdown-item">Colportagem</a>
                        <a href="index.php?pag=<?php echo $menu10 ?>" class="dropdown-item">Assistencia social</a>
                        <a href="index.php?pag=<?php echo $menu11?>" class="dropdown-item">Escola sabatina</a>
                        <a href="index.php?pag=<?php echo $menu12 ?>" class="dropdown-item">Evangelismo</a>
                        <a href="index.php?pag=<?php echo $menu13 ?>" class="dropdown-item">Mulher</a>
                    </div>                               
                               
                </div>
                <a href="#" class="nav-item nav-link">Eventos</a>
               
                <a href="#" class="nav-item nav-link">Contactos</a>
            </div>
            <a href="cadastro.php" target="_blank|_self" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscrição ao congresso<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
<?php 

  require_once($pag.'.php');
 ?>

    
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Links rápidos</h4>
                    <a class="btn btn-link" href="">sobre nos</a>
                    <a class="btn btn-link" href="">Departamentos</a>
                    <a class="btn btn-link" href="">Eventos</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contactos</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Luanda Angola</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+244 222 222 </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@iasdmr.ao</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Galeria</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ev-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ev-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ev-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ev-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ev-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ev-1.jpg" alt="">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Igreja Advetista do 7 dia movimento de reformama</a>, Direitos reservado.

                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="border-radius: 100px;"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>