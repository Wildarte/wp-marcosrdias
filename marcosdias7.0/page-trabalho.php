<?php
//Template Name: Trabalhe Conosco
get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
<style>
    .content_page{
        padding: 40px 10px;
    }
    .content_page .title-default{
        text-align: center;
    }
	.form_page_contact{
		max-width: 920px;
		margin: auto
	}
	.form_page_contact input, .form_page_contact textarea{
		background-color: var(--color-white);
		border: 1px solid #bbbbbb;
		outline: none;
		padding: 10px;
		width: 100%;
		transition: border .2s;
	}
	.form_page_contact input[type='submit']{
		font-size: 1em;
		font-weight: 500;
		background-color: var(--color-blue);
		color: var(--color-white);
		padding: 8px 30px;
		border-radius: 3px
		display: inline-block;
		margin: auto 0;
		border: none;
		transition: background-color .18s;
		text-align: center;
		cursor: pointer;
		border-radius: 3px;
		max-width: 200px
	}
</style>
    <main>

        <?php 
        
            $image = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'banner_img_page_id', 1 ), 'medium' ); 

            if($image):
        
        ?>

        <header class="header_default" style="background-image: url(<?= $image ?>);">

            <div class="under_header_default">

                <div class="container">

                    <h2 class="title-default title_default"><?= get_the_title() ?></h2>

                </div>

            </div>

        </header>

        <?php endif; ?>
		
		<header class="header-default">

                    <h2 class="title-default"><?= get_the_title() ?></h2>
                </header>

        <section class="container content_page" style="max-width: 920px">
            
            <?php if(!$image): ?>

                

            <?php endif; ?>

            <div class="content_post">

                <?= get_the_content() ?>

            </div>
<!--
            <form action="" class="form form_page_contact" method="post" id="formHome">
                <p style="width: 100%; text-align: center; padding: 0 10px" id="retorno_form_home"></p>

                <div class="form_group f-50">
                    <input type="text" name="nome_home" id="nome_home" placeholder="Nome" required>
                </div>
                <input type="hidden" name="null1" value="">
                <input type="hidden" name="null2" value="">
                <input type="hidden" name="contato_from" value="<?= home_url() ?>/contato">
                <div class="form_group f-50">
                    <input type="email" name="email_home" id="email_home" placeholder="E-mail" required>
                </div>
                <div class="form_group f-50">
                    <input type="text" name="telefone" id="empresa_home" placeholder="Telefone">
                </div>
                <div class="form_group f-50">
                    <input type="file" name="" id="">
                </div>
                <div class="form_group w-100">
                    <textarea name="msg_home" id="msg_home" cols="30" rows="8" placeholder="Deseja dizer algo sobre seu contato" required></textarea>
                </div>
                <div class="form_group w-100 form_group_button">
                    <button class="btn-blue" type="submit" id="sendHome">Enviar</button>
                </div>
				
            </form>
-->
			<div class="form_page_contact">
				<?php echo do_shortcode('[contact-form-7 id="6139" title="contato carreira"]'); ?>
			</div>
        </section>

    </main>

<?php endwhile; endif; ?>
<?php get_footer() ?>