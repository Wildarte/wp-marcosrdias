<footer class="footer">

<div class="container content_footer d-flex">
    <div class="f-25 col_footer">
        <a href="" class="link_footer">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo_mrd.png" alt="">
        </a>
    </div>

    <div class="f-25 col_footer">
        <h3>Atendimento</h3>
        <p>Segunda a sexta-feira,
            das 08:30 às 18:30</p>
    </div>

    <div class="f-25 col_footer">
        <h3>Menu</h3>

        <?php
            wp_nav_menu([
                'menu' => 'Menu Rodapé',
                'menu_class' => 'lista_menu',
                'theme_location' => 'menu-rodape',
                'container' => false
            ])
        ?>

    </div>

    <div class="f-25 col_footer">
        <h3>Contato</h3>

        <p><i class="bi bi-geo-alt"></i> Rua do Ouro, 558, Serra, Belo Horizonte/MG</p>
        <!--
        <p>
            <a href="https://api.whatsapp.com/send?phone=5593183543554" target="_blank"><i class="bi bi-telephone"></i> 31 98354-3554</a>
        </p>
-->
        <p><a href="https://api.whatsapp.com/send?phone=<?= get_post_meta(get_id_by_template_name('page-home.php'), 'number_whatsapp', true); ?>" target="_blank"><i class="bi bi-whatsapp"></i> <?= get_post_meta(get_id_by_template_name('page-home.php'), 'number_whatsapp', true); ?></a>
        </p>
    </div>
</div>

<div class="footer_bottom">
    <div class="content_bottom d-flex container">
        <p>© 2022 MRD. Todos os direitos reservados. Design by MRD - CNPJ: 15.794.458/0001-37</p>

        <ul class="d-flex links_social">
            <li>
                <a href="https://www.facebook.com/marcosrdiasadv/"><i class="bi bi-facebook"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/marcosrdiasadv/"><i class="bi bi-instagram"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/marcos-roberto-dias"><i class="bi bi-linkedin"></i></a>
            </li>
        </ul>
    </div>
</div>

</footer>


<!-- 
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.mask.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/script-office2.js"></script>
<script src="assets/js/map-script.js"></script>
-->

<script>let url_site = '<?= get_template_directory_uri() ?>'; </script>

<?php wp_footer() ?>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/21e66316-6d95-41a4-a85c-08ff555e4258-loader.js" ></script>
</body>
</html>