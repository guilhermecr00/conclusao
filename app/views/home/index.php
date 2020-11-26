<?php
$this->view('home/cabecario');
?>
<!-- Navigation-->
<?php
$this->view('home/menu');
?>


<!-- Masthead-->
<header class="masthead bg-info text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/profile1.svg" alt="Foto do perfil Guilherme CR" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">
            Guilherme CR
        </h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-user-tie"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">
            Estudante de Programação Web
        </p>
        <p class="masthead-subheading font-weight-light mb-0">
            PHP - Javascript - MySQL
        </p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Portfólio
        </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-1x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/portfolio/cliente.svg" alt="Cliente 1" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-1x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/portfolio/cliente2.svg" alt="Cliente 2" />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-1x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/portfolio/cliente3.svg" alt="Cliente 3" />
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-info text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">
            Sobre mim
        </h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-address-card"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">
                    Olá, pessoal.
                </p>
                <p class="lead">
                    Me chamo Guilherme e estou iniciando meus estudos em programação web.
                </p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">
                    Atualmente, estudo HTML, CSS, JS e PHP.
                </p>
            </div>

        </div>
</section>


<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
            class="fa fa-chevron-up"></i></a>
</div>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
    aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                id="portfolioModal1Label">
                                Vem aí 1 !
                            </h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cliente.svg"
                                alt="Cliente 1" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam,
                                recusandae quos quis inventore quisquam
                                velit asperiores, vitae? Reprehenderit
                                soluta, eos quod consequuntur itaque.
                                Nam.
                            </p>
                            <button class="btn btn-info" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fechar janela
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
    aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                id="portfolioModal2Label">
                                Vem aí 2 !
                            </h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cliente2.svg"
                                alt="Cliente 2" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam,
                                recusandae quos quis inventore quisquam
                                velit asperiores, vitae? Reprehenderit
                                soluta, eos quod consequuntur itaque.
                                Nam.
                            </p>
                            <button class="btn btn-info" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fechar janela
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
    aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                id="portfolioModal3Label">
                                Vem aí 3 !
                            </h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cliente3.svg"
                                alt="Cliente 3" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Mollitia neque
                                assumenda ipsam nihil, molestias magnam,
                                recusandae quos quis inventore quisquam
                                velit asperiores, vitae? Reprehenderit
                                soluta, eos quod consequuntur itaque.
                                Nam.
                            </p>
                            <button class="btn btn-info" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Fechar janela
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php
$this->view('home/form');
?>

<?php
$this->view('home/rodape');
?>