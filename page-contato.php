<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>

    <main class="contato">
        <div class="container">
            <h1>Contato</h1>

            <div class="row mb-5">
                <div class="col-sm-12 col-lg-6">
                    <div class="telefones">
                        <h2>Telefones:</h2>

                        <div class="telefone-itens">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <p class="telefone-item">
                                        <i class="fa-solid fa-phone"></i>
                                        <span><?= get_post_meta(get_the_ID(), '_telefone', true); ?></span>
                                    </p>
                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <p class="telefone-item">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <span><?= get_post_meta(get_the_ID(), '_whatsapp', true); ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="social">
                        <h2>Redes sociais:</h2>

                        <div class="social-itens">
                            <a class="social-item" href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>

                            <a class="social-item" href="#">
                                <i class="fa-brands fa-square-facebook"></i>
                            </a>

                            <a class="social-item" href="#">
                                <i class="fa-brands fa-square-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <form>
                        <div class="mb-3">
                            <input placeholder="Nome" type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input placeholder="Whatsapp" type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input placeholder="Email" type="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input placeholder="Assunto" type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Mensagem" cols="30" rows="10"></textarea>
                        </div>

                        <button class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2568748697104!2d-43.177941523902675!3d-22.9038943377693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9981e1d97983bf%3A0x340fe9a9c36774d5!2sEdif%C3%ADcio%20C%C3%A2ndido%20Mendes!5e0!3m2!1spt-BR!2sbr!4v1682450965152!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

<?php get_footer(); ?>