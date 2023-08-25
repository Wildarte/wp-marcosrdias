<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
<style>
    .content_page{
        padding: 40px 10px;
    }
    .content_page .title-default{
        text-align: center;
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
		
		<?php if(!$image): ?>

                <header class="header-default">

                    <h2 class="title-default"><?= get_the_title() ?></h2>
					
                </header>
            <?php endif; ?>

        <section class="container content_page">
            
            

            <div class="content_post">

                <?php the_content() ?>

            </div>

        </section>

    </main>

<?php endwhile; endif; ?>
<?php get_footer() ?>