<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $desc; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="public/lib/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="public/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="public/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="public/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/lib/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="public/lib/carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/lib/slick/slicknav.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="public/assets/css/styles.css">
    <link rel="stylesheet" href="public/assets/css/custom.css">

</head>

<body>
    <!-- loader -->
    <?php include_once 'loader.php' ?>

    <!-- back to top -->
        <button class="back-to-top" type="button"><i class="fa-solid fa-chevron-up"></i></button>

        <!-- page scroll progress bar -->
        <div class="progress-bar-wrapper"><div class="progress"></div></div>

        <!-- whatsapp ping -->
    <div class="header_contec_what">
        <a href="https://wa.me/9818250250"><img src="public/assets/images/header/whatsapp.png" alt="shreenandik"></a>
    </div>

    <!-- header start -->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand header-logo" href="/">
                    <img src="public/assets/images/home/logo2.png" alt="shreenandik">
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars-staggered"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <!-- <li class="nav-item    "> <a class="nav-link" href="coming">Services</a></li> -->
                        <li class="nav-item dropdown-list">
                            <a class="nav-link" href="javascript:void(0)">Services</a>
                            <div class="_dropdown-block">
                                <div class="container-fuild container-xxl container-lg container-xl">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class=" ">
                                                <li class="nav-item"><a class="nav-link" href="ai-ml-solutions.php"><img src="public/assets/images/header/2.png" alt="shreenandik"> AI & ML Solutions</a></li>
                                                <li class="nav-item"><a class="nav-link" href="business-intelligence.php"><img src="public/assets/images/header/8.png" alt="shreenandik"> Business Intelligence</a></li>
                                                <li class="nav-item"><a class="nav-link" href="business-automation.php"><img src="public/assets/images/header/5.png" alt="shreenandik"> Business Automation</a></li>
                                                <li class="nav-item"><a class="nav-link" href="app-development.php"><img src="public/assets/images/header/1.png" alt="shreenandik"> APP Development</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class=" ">
                                                <li class="nav-item"><a class="nav-link" href="premium-custom-solution.php"><img src="public/assets/images/header/6.png" alt="shreenandik"> Premium Custom Solutions</a></li>
                                                <li class="nav-item"><a class="nav-link" href="ui-ux.php"><img src="public/assets/images/header/7.png" alt="shreenandik"> Ui/UX Design</a></li>
                                                <li class="nav-item"><a class="nav-link" href="web-development.php"><img src="public/assets/images/header/3.png" alt="shreenandik"> Web Development</a></li>
                                                <li class="nav-item"><a class="nav-link" href="iot.php"><img src="public/assets/images/header/4.png" alt="shreenandik"> IOT Solutions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="coming">FAQs</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio </a></li>
                        <li class="nav-item"><a class="nav-link" href="./blog.php">Blog </a></li>
                    </ul>
                    <form class="d-flex header_collapse" role="search">
                        <a href="contact.php" class="btn btn-default _button themeBtn" type="button">Contact</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>