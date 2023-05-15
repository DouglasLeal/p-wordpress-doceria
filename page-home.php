<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/img/bolo.jpg" class="d-block w-100" alt="Bolo">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/docinhos.png" class="d-block w-100" alt="Docinhos">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/mousse.jpg" class="d-block w-100" alt="Mousse">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="boas-vindas">
    <div class="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h2 class="boas-vindas-titulo">Alegria em forma de doce!</h2>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p class="boas-vindas-texto">Bem-vindos à nossa doceria, onde a alegria vem em forma de doce! Aqui,
                    nós temos uma receita
                    secreta que transforma paixão, dedicação e alegria em sobremesas deliciosas.</p>
            </div>
        </div>
    </div>
</section>

<section class="produtos">
    <div class="container">
        <div class="row g-0">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="produto-item">
                    <div class="produto-item-conteudo produto-item-conteudo-primary">
                        <p>Bolos</p>
                    </div>
                    <img class="img-fluid" src="./assets/img/bolo.jpg" alt="Bolo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="produto-item ">
                    <div class="produto-item-conteudo produto-item-conteudo-secondary">
                        <p>Brownies</p>
                    </div>
                    <img class="img-fluid" src="./assets/img/brownie.jpg" alt="Bolo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="produto-item">
                    <div class="produto-item-conteudo produto-item-conteudo-primary">
                        <p>Doces</p>
                    </div>
                    <img class="img-fluid" src="./assets/img/docinhos.png" alt="Bolo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="produto-item">
                    <div class="produto-item-conteudo produto-item-conteudo-secondary">
                        <p>Mousses</p>
                    </div>
                    <img class="img-fluid" src="./assets/img/mousse.jpg" alt="Bolo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="produto-item">
                    <div class="produto-item-conteudo produto-item-conteudo-primary">
                        <p>Pudins</p>
                    </div>
                    <img class="img-fluid" src="./assets/img/pudim.jpg" alt="Bolo">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="produto-item">
                    <div class="produto-item-conteudo produto-item-conteudo-secondary">
                        <p>Tortas</p>
                    </div>
                    <img class="img-fluid" src="./assets/img/torta.jpg" alt="Bolo">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
