<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDD3SQB');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <title><?php bloginfo('name') ?></title>
    <!-- wp head -->
    <?php wp_head() ?>
    <!-- wp head -->
</head>
<body>

<div class="over_body"></div>

    <?php
        $number_whatsapp = get_post_meta(get_id_by_template_name('page-home.php'), 'number_whatsapp', true);
        $msg_whatsapp = get_post_meta(get_id_by_template_name('page-home.php'), 'msg_whatsapp', true);
        $link_whatsapp = 'https://api.whatsapp.com/send?phone='.$number_whatsapp.'&text='.$msg_whatsapp;
    ?>

    <header class="header">
        <!-- 
        <div class="cta_top">
            <a href="<?= $link_whatsapp ?>">
                Converse com um especialista agora
            </a>

            <span class="close_cta_top">
                <i class="bi bi-x"></i>
            </span>
        </div>
 -->
        <div class="content_header">
            <div class="container d-flex content_inset_header">

                <div class="logo_link d-flex">
                    <a href="<?= home_url() ?>">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                            add_query_arg( array( 'something' => 'blabla==' ), 'https://www.google.com' );
                        ?>
                        <img src="<?=  esc_url( $logo[0] )  ?>" alt="logo do site" title="logo do site">
                    </a>
                    <ul class="d-flex links_social_header">
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
<!-- 
                <nav class="extra_menu">
                    <ul class="list_extra_menu">
                        <li>
                            <a href="#sobre">Sobre</a>
                        </li>
                        <li>
                            <a href="#unidades">Unidades</a>
                        </li>
                        <li>
                            <a href="#faq">FAQ</a>
                        </li>
                        <li>
                            <a href="#formCon">Contato</a>
                        </li>
                        <li>
                            <a href="#blog">Seus Direitos</a>
                        </li>
                    </ul>
                </nav>
                 -->
    
                <nav class="menu">
                    <div class="top_menu_mobile">
                        <a href="">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                        </a>
                        <div class="btn_close_menu">
                            <i class="bi bi-x-circle"></i>
                        </div>
                    </div>
                    <?php
                        wp_nav_menu([
                            'menu' => 'Menu Principal',
                            'menu_class' => 'lista_menu',
                            'theme_location' => 'menu-principal',
                            'container' => false
                        ])
                    ?>
                    <!-- 
                    <ul class="lista_menu">
                        <li>
                            <a href="">Sobre a MRD</a>
                        </li>
                        <li>
                            <a href="">Endereços</a>
                        </li>
                        <li>
                            <a href="">Seus Direitos</a>
                        </li>
                        <li>
                            <a href="">Contato</a>
                        </li>
                    </ul>
                     -->
    
                    <div class="cta_menu">
                        <a class="btn-blue" href="<?= $link_whatsapp ?>">
                            Fale com um advogado
                        </a>
                    </div>
    
                 

                    <ul class="header_social_mobile" style="width: unset;">
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

                </nav>

                <div class="btn_header">
                    <div class="btn_menu">
                        <i class="bi bi-list"></i>
                    </div>
                </div>
            </div>
        </div>
        
    </header>