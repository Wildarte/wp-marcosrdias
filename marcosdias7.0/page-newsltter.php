<!DOCTYPE html>

<head lang="pt-br">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title><?= get_the_title() ?></title>

    <!-- wp header -->
    <?php wp_head() ?>
    <!-- wp header -->
</head>
<?php
//Template Name: News Letter
?>

<style>
    html {
        margin-top: unset !important;
    }
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 1100px;
        margin: auto;
    }
    header.header{
        width: 100%;
    }
    .header_top{
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 20px 0;
    }
    .header_top a{
        color: #333333;
    }
    .header_bottom{
        width: 100%;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        padding: 40px;
        justify-content: space-between;
    }
    .social_header ul{
        display: flex;
		list-style: none;
    }
    .social_header ul li a{
        padding: 5px;
        color: #232323;
    }
    .title_header{
        width: 100%;
        padding: 40px;
        text-align: center;
        background-color: #25353F;
        color: #ffffff;
    }


    /* content news */
    .content_news{
        padding: 40px 10px;
        background-color: #ffffff;
    }
    .content_news *{
    }
    .content_news h1{
        font-size: 2.5em;
        font-weight: 500;
        margin-bottom: 10px;
        padding: 0 20px;
    }
    .content_news h2{
        font-size: 2.2em;
        font-weight: 500;
        margin-bottom: 10px;
        padding: 0 20px;
    }
    .content_news h3{
        font-size: 1.9em;
        font-weight: 400;
        margin-bottom: 10px;
        padding: 0 20px;
    }
    .content_news h4{
        font-size: 1.5em;
        font-weight: 400;
        margin-bottom: 10px;
        padding: 0 20px;
    }
    .content_news h5{
        font-size: 1.3em;
        font-weight: 400;
        margin-bottom: 10px;
        padding: 0 20px;
    }
    .content_news h6{
        font-size: 1em;
        font-weight: 400;
        margin-bottom: 10px;
        padding: 0 20px;
    }
    .content_news hr{
        border: none;
        height: 2px;
        background-color: #565656;
        margin: 20px 0;
    }
    .content_news p{
        font-size: 1.2em;
        font-weight: 300;
        line-height: 1.8em;
        margin-bottom: 10px;
        padding: 0 20px;
		text-align: justify
    }
	.content_news ul li{
        font-size: 1.2em;
        font-weight: 300;
        line-height: 1.5em;
        margin-bottom: 10px;
        padding: 0 20px;
		text-align: justify
    }
    .wp-block-column{
        margin: 20px;
    }
    .wp-block-column h1,
    .wp-block-column h2,
    .wp-block-column h3,
    .wp-block-column h4,
    .wp-block-column h5,
    .wp-block-column h6,
    .wp-block-column p{
        padding: 0;
    }
    .content_news .wp-block-column img{
        width: 100%;
    }
    .content_news a{
        border: 1px solid #8737ff;
        color: #8737ff!important;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1.5rem!important;
        padding: 8px 26px;
    }
    .content_news a:hover{
        text-decoration: none!important;
    }
    /* content news */

    /* gallery */
    figure.wp-block-gallery.has-nested-images{
        display: flex;
        flex-wrap: wrap;
    }
    .wp-block-gallery.has-nested-images figure.wp-block-image img{
        padding: 10px;
    }
    /* gallery */
	
	.content_news ul{
		margin-left: 40px;
		margin-top: 20px;
		margin-bottom: 20px
	}

    @media(max-width: 769px){
        .header_top{
            padding: 20px 10px;
        }
        .header_top p{
            font-size: 1em;
        }
        .content_news h4{
            font-size: 1.2em;
        }
        .content_news h2{
            font-size: 1.9em;
        }
        .content_news p{
            font-size: 1em;
        }
        .content_news h1{
            font-size: 2.2em;
        }
        .content_news h3{
            font-size: 1.5em;
        }
        .content_news a{
            font-size: 1.2rem!important;
        }
    }

    @media(max-width: 420px){
        .header_top{
            flex-wrap: wrap;
            padding: 20px;
        }
        .header_top div{
            width: 100%;
            margin: 6px 0;
        }
        .header_bottom{
            padding: 20px;
        }
		.title_header{
			padding: 20px 10px
		}
		.title_header h1{
			font-size: 1.3em
		}
		.content_news p {
			padding: 0;
		}
    }
</style>
<body style="background-color: #F4F4F4;">

    <main>

        <div class="container">

            <header class="header">
                
                <div class="header_top">
                    <div class="">
                        <p>Jornal de Novidades / I / <?= get_the_date() ?></p>
                    </div>

                    <div class="">
                        <p>Problemas na visualização? <a href="https://api.whatsapp.com/send?phone=5531990704388&text=Oi!">Fale com a gente!</a></p>
                    </div>
                </div>

                <div class="header_bottom">
                    <a href="<?= home_url() ?>">
                        <img src="https://marcosrdias.com.br/wp-content/uploads/2022/06/02.png" alt="">
                    </a>

                    <div class="social_header">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/marcosrdiasadv/"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/marcos-roberto-dias"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/marcosrdiasadv/"><i class="bi bi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="title_header">
                    <h1><?= get_the_title() ?></h1>
                </div>
                
                
            </header>


            <section class="content_news">

                

                <?= get_the_content() ?>

            </section>

        </div>

    </main>


<?php 

    if(false){

        get_footer();

    }else{

    }

?>


