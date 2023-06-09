<footer>
    <div class="info">
        <div class="container">
            <?= the_custom_logo(); ?>

            <div class="contatos">
                <h3>Entre em contato:</h3>
                <p class="contato-item">
                    <i class="fa-solid fa-phone"></i>
                    <span><?= get_post_meta(get_the_ID(), '_telefone', true); ?></span>
                </p>

                <p class="contato-item">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span><?= get_post_meta(get_the_ID(), '_whatsapp', true); ?></span>
                </p>
            </div>

            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="" data-width=""
                 data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false"
                 data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/facebook">Facebook</a></blockquote>
            </div>
        </div>
    </div>

    <div class="copy">
        <div class="container">
            <p class="empresa">Copyright 2023 &copy; - <span>DoceMia</span></p>
            <a class="dev" href="http://douglasleal.com.br" target="_blank">Desenvolvido por <span>Douglas Leal</span></a>
        </div>
    </div>
</footer>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v16.0"
        nonce="QyovfdBi"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <?php wp_footer(); ?>
</body>
</html>
