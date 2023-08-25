<?php
//Template Name: Home
get_header();
$number_whatsapp = get_post_meta(get_the_ID(), 'number_whatsapp', true);
$msg_whatsapp = get_post_meta(get_the_ID(), 'msg_whatsapp', true);
$link_whatsapp = 'https://api.whatsapp.com/send?phone='.$number_whatsapp.'&text='.$msg_whatsapp;
?>

    <main>

        <section class="slide_hero">
            <?php
                $banners = get_post_meta(get_the_ID(), 'slider_banner', true);
                if($banners):
            ?>
            <div class="owl-carousel slide_hero_content" id="slide_hero">
                <?php
                   

                    foreach($banners as $banner):
                ?>
                <<?= $banner['banner_link'] != '' ? 'a' : 'div';  ?> href="<?= $banner['banner_link'] ?>">
                    <img src="<?= $banner['banner_img'] ?>" alt="">
                </<?= $banner['banner_link'] != '' ? 'a' : 'div';  ?>>

                    <?php endforeach; endif; ?>

                
            </div>
        </section>

        <section class="section_default section_one" id="sobre">
            <div class="container d-flex">
                <div class="f-50 about_dr animate__animated animate__bounceInLeft">
                    <h2 class="title-default">Marcos Roberto Dias 20 anos de experiência</h2>
                    <p class="desc-default">Marcos Roberto Dias Sociedade de Advogados Especialista em Ações Trabalhistas voltadas para empregados do varejo de todo o Brasil, com mais de 20 anos de experiência.</p>
                    <p class="desc-default">Somos um escritório inovador, com atendimento em todo o território nacional, por meio de diversos canais: WhatsApp, e-mail, telefone e redes sociais. A nossa equipe de suporte acompanha cada passo do seu processo.</p>

                    <a class="btn-blue" href="<?= home_url() ?>/sobre">Saiba Mais</a>
                </div>

                <div class="f-50 img_about_dr">
                    
                    <img src="https://marcosrdias.com.br/wp-content/uploads/2022/11/banner-site-marcos.png" alt="Marcos Roberto Dias" title="Marcos Roberto Dias">
                    
                     <!-- 
                    <div class="frame_video">
                        <iframe width="" height="" src="https://www.youtube.com/embed/qwAUHeLSQPQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                     -->
                </div>

                
            </div>
        </section>
			<!--
		<section>
			<img style="width: 100%" src="https://marcosrdias.com.br/wp-content/uploads/2022/10/BANNER_1B-1-1.jpg">
		</section>
-->
			
<!--
		<div class="header-default">
			<div class="container d-flex card_one_group">
				<article class="card_one onscreen onscreen_zoom delay-2">
					<img src="<?= get_template_directory_uri() ?>/assets/img/ic1.png" alt="">
					São mais de 18 mil processos trabalhistas
				</article>
				<article class="card_one onscreen onscreen_zoom delay-3">
					<img src="<?= get_template_directory_uri() ?>/assets/img/ic2.png" alt="">
					Mais de 1.700 avaliações 5 estrelas no Google
				</article>
				<article class="card_one onscreen onscreen_zoom delay-4">
					<img src="<?= get_template_directory_uri() ?>/assets/img/ic3.png" alt="">
					Contrato de êxito: pague somente após o recebimento do valor da causa.
				</article>
				<article class="card_one onscreen onscreen_zoom delay-5">
					<img src="<?= get_template_directory_uri() ?>/assets/img/ic4.png" alt="">
					Temos mais de 16 escritórios espalhados pelo Brasil
				</article>
			</div>
		</div>
-->

        <section class="section_three">

            <div class="container">
                <header class="section_three_header">
                    <h2 class="title-default">Algumas das reclamações mais comuns na Justiça do Trabalho</h2>
                </header>

                <section class="d-flex">
                    <article class="f-33 card_simple onscreen onscreen_down">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon1.png" alt="">
                        </div>
                        <h3>Horas Extras</h3>
                        <p>Receber a remuneração correta por qualquer período trabalhado em hora extra é seu direito</p>
                    </article>
                    <article class="f-33 card_simple onscreen onscreen_down delay-2">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon2.png" alt="">
                        </div>
                        <h3>Dano e Assédio Moral</h3>
                        <p>Exposição de pessoas a situações humilhantes e constrangedoras no ambiente de trabalho. A conduta traz danos à dignidade e à integridade do indivíduo</p>
                    </article>
                    <article class="f-33 card_simple onscreen onscreen_down delay-3">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon3.png" alt="">
                        </div>
                        <h3>Prêmios e Comissões</h3>
                        <p>Às vezes, os valores de prêmios e comissões são menores do que os acertados em contrato, ou mesmo deixam de ser pagos</p>
                    </article>
                    <article class="f-33 card_simple onscreen onscreen_down">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon4.png" alt="">
                        </div>
                        <h3>Desvios e Acúmulo de Função</h3>
                        <p>O trabalhador pode reclamar seus direitos caso exijam que ele cumpra atividades para as quais não foi contratado ou diferentes daquelas previstas em contrato.</p>
                    </article>
                    <article class="f-33 card_simple onscreen onscreen_down delay-2">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon5.png" alt="">
                        </div>
                        <h3>Verbas Rescisórias</h3>
                        <p>Frequentemente, os empregados recebem pagamentos de verbas rescisórias menores do que as devidas</p>
                    </article>
                    <article class="f-33 card_simple onscreen onscreen_down delay-3">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon6.png" alt="">
                        </div>
                        <h3>Vínculo Empregatício</h3>
                        <p>Muitas empresas contratam empregados, porém deixam de assinar a carteira de trabalho para não pagarem verbas trabalhistas</p>
                    </article>
                </section>
            </div>

        </section>

        <section class="section_five">
            <h2 class="title-default">A sua reclamação trabalhista se enquadra em algum desses casos?</h2>

            <p class="desc-default">Busque agora os seus direitos! Entre em contato com a Marcos Roberto Dias Sociedade de Advogados</p>

            <a class="btn-blue bg-blue-2" href="<?= $link_whatsapp ?>">CONVERSE AGORA COM UM ESPECIALISTA</a>
        </section>

        

    
        <section id="unidades">
            <div class="container container_mapa">
                <?php

                    include('inc/mapa.php')

                ?>
            </div>
        </section>
			
			<section class="office_slide">
            <header class="container header_office_slide">
                <h2 class="title-default">Escritórios em mais de 16 cidades</h2>
            </header>
            <div class="d-flex owl-carousel office_slide" id="office_slide">
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/minas1/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://g.page/marcosrdiasadv?share" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Belo Horizonte/MG</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/minas2/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/fKSBe6WbZb1yEKpdA" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Juiz de Fora/MG</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/saopaulo/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/LtNcZbgqyGrA815GA" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">São Paulo - Capital/SP</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/saopaulo2/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/PmZHWpozbp1aX4Fb9" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Santo Amaro - São Paulo</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/ribeirao/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/UwpiDFjFGdbNn8XW8" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Ribeirão Preto/SP</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/campinas/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/iaPFW3NQJpQ8jA5o7" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Campinas/SP</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/rio/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/mCSBkRcZU8LQpudw6" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Rio de Janeiro/RJ</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/es/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/b5PUCFLw3sKpiVbn6" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Vitória/ES</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/bahia/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/7n9kijAtbS9fWZNw7" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Salvador/BA</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/pe/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/huUv1PwDjtJjh4VMA" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Recife/PE</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/parana/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/f2CiD9bPWNiyB2D26" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Curitiba/PR</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/sc/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/aZBrvJRJV8HJB21s7" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Florianópolis/SC</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/riograndesul/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/7pskGrCYq3NHJrEf7" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Porto Alegre/RS</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/df/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://www.google.com/maps?ll=-15.831862,-48.055534&z=15&t=m&hl=pt-BR&gl=BR&mapclient=embed" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Brasília/DF</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/goias/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/zSVKNdkdnP8PRj8k8" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Goiânia/GO</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/matogrosso/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/XivnfDZRsMULMkpf6" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Cuiabá/MT</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/matogrossosul/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/TWxb8BxKhv8WggcR8" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Campo Grande/MS</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- 
        <section class="cta_simple">
            <div class="container d-flex">
                <div class="card_simple_left">
                    <h3 class="desc-default color-white"><strong>Busque agora os seus direitos</strong></h3>
                    <p class="desc-default color-white">Entre em contato com a Marcos Roberto Dias Sociedade de Advogados.</p>
                </div>

                <div class="card_simple_right">
                    <a class="btn-blue" href="<?= $link_whatsapp ?>">Converse com um especialista</a>
                </div>
            </div>
        </section>
         -->
			
		<section class="clients">
            <div class="container">
                <header class="header_clients">
                    <h2 class="title-default">
                        O que dizem os nossos clientes?
                    </h2>
                </header>
                
                <?php get_template_part('template-parts/content','deps'); ?>

            </div>
        </section>
			
		<section class="section_adv">
            <div class="container d-flex section_adv_content">
                <div class="f-50 section_adv_left">
                    <h2 class="title-default">Compromisso constante com a defesa dos seus direitos</h2>

                    <ul class="list_check">
                        <li>
                            <p class="desc-default left-mobile">Especialistas na defesa dos direitos dos trabalhadores do varejo;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Mais de 20 anos de experiência na área;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Atendimento personalizado. Acreditamos que cada caso é único e merece atenção especial;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Aproximadamente 15 mil processos no Jusbrasil;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Nota 5 estrelas no Google, com mais de 1.000 avaliações.</p>
                        </li>
                    </ul>

                    <a class="btn-blue cta_adv" href="<?= $link_whatsapp ?>">Converse com um advogado</a>
                </div>

                <div class="f-50 section_adv_img">
                    <img src="https://marcosrdias.com.br/wp-content/uploads/2022/11/banner-site-dani.png" alt="">
                </div>
            </div>
        </section>

        <section class="section_faq" id="faq">

            <div class="container">

                <h2 class="title-default">Dúvidas frequentes dos trabalhadores</h2>

                <div class="faq_ask">
    
                    <ul class="list_ask">
    
                        <li>
                            <h4><i class="bi bi-dash"></i>Preciso me deslocar até o escritório? Não encontrei a MRD na minha cidade.</h4>
                            <p>Não! Você não precisa se deslocar até o escritório. Um de nossos diferenciais encontra-se justamente na equipe de suporte, que possibilita o acompanhamento passo a passo do seu processo com diversos canais de interação entre cliente e advogado. Ou seja, você pode conversar diretamente com a nossa equipe em um de nossos canais de comunicação (Site, whatsapp, Redes sociais) e, caso queira uma conversa presencialmente, um de nossos especialistas vai até você.
                            </p>
                        </li>
    
                        <li>
                            <h4><i class="bi bi-dash"></i>Quanto tempo demora uma Ação Trabalhista?</h4>
                            <p>Essas situações sempre geram uma ansiedade e é normal que você esteja se perguntando quanto tempo tudo isso vai levar. Em média, um processo demora cerca de três anos para ser concluído. Mas é importante frisar que este tempo é somente uma estimativa. Cada caso é único e demanda um tempo para sua solução.
                            </p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Quanto tempo tenho para buscar os meus direitos trabalhistas na Justiça?</h4>
                            <p>Você tem dois anos, contados da data do desligamento da empresa para buscar seus direitos na justiça. Caso esse prazo seja ultrapassado, mesmo que tenha direitos a receber, tais direitos já estão prescritos e não podem mais ser objeto de discussão.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Posso processar a empresa enquanto ainda estou trabalhando?</h4>
                            <p>Sim! Você não precisa sair da empresa para entrar na Justiça contra ela, podendo iniciar uma ação trabalhista ainda como funcionário.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Quais provas e documentos são necessários para abrir uma Reclamação Trabalhista?</h4>
                            <p>Para iniciar uma Reclamatória Trabalhista será necessário cópia da identidade; cópia do CPF;
                            comprovante de endereço; cópia da CTPS; termo de rescisão do contrato de trabalho (quando houver); recibos de pagamentos (quando houver); Documentos que sirvam como prova para a causa trabalhista, tais como e-mails, comunicados, gravações de áudio e vídeo, fotos e afins e a procuração assinada para que o advogado possa te representar judicialmente. </p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Quanto custa a contratação de um advogado para ação trabalhista?</h4>
                            <p>Normalmente, o honorário de um advogado trabalhista é cobrado a partir de uma porcentagem sobre o valor da causa vencida. Essa modalidade de pagamento é conhecida como “contrato de êxito”. Aqui no escritório não é diferente. Ou seja, na prática você não irá ter nenhum custo com o seu processo enquanto ele estiver tramitando. Você paga para gente única e exclusivamente após o recebimento da ação.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Perdi o processo. Quanto tenho que pagar para o escritório?</h4>
                            <p>Nada! Justamente porque confiamos em nossa metodologia e competência de nossa equipe, nosso escritório trabalha em contrato de êxito. Sendo assim, você só paga se ganhar o processo, mesmo assim, somente quando receber os valores da ação. Se você não ganhar nada, não terá que pagar nenhum valor para nós.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Processei a empresa e não ganhei. Posso tentar novamente?</h4>
                            <p>Se um juiz já analisou o caso e entendeu que não há direito ali, não será possível entrar com outro processo com os mesmos pedidos. Ou seja, o juiz já terá analisado o mérito.
                            O que é possível é entrar com uma nova Ação Trabalhista, com outros pedidos, necessariamente diferentes daqueles do primeiro processo.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Um colega também processou a empresa, mas o valor que ele ganhou foi maior do que o meu. Por que?</h4>
                            <p>Primeiramente é importante destacar que, ainda que você e seu colega tenham os mesmos cargos e recebam o mesmo salário, pode acontecer de vocês trabalharem em horários diferentes, dos ganhos de comissão serem diferentes, do tempo de empresa ser diferentes. Somente por estas questões, o valor recebido no processo já será diferente. Além disso, há outros fatores que podem fazer uma pessoa ganhar mais ou menos em um processo, como as verbas trabalhistas que não foram pagas no momento da rescisão e as possíveis indenizações. Então, os valores vão depender do caso específico de cada trabalhador.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Entrei com uma Ação Trabalhista. Terei problemas para ser contratado futuramente?</h4>
                            <p>É normal ter medo de não ser contratado por outras empresas por ter entrado com um processo trabalhista contra o antigo empregador. Mas entenda uma coisa: exigir os seus direitos na justiça não marca a sua vida profissional. Se ficar comprovado que você deixou de ser contratado por causa de um processo trabalhista em andamento ou já encerrado, essa atitude é passível de indenização.</p>
                        </li>
                    </ul>
    
                </div>

                <div class="cta_ask">
                    <a class="btn-blue" href="#formCon">Deixe sua dúvida</a>
                </div>

            </div>

        </section>

        

        <section class="section_form" id="formCon">

            <div class="container d-flex section_form_content">
                <div class="section_form_left">

                    <h2 class="title-default title_form color-white">Ligamos para você</h2>
                    <p class="desc-default desc_form color-white">Se você tiver qualquer problema ou dúvidas sobre os seus direitos, preencha o formulário que entraremos em contato assim que recebermos a sua solicitação.</p>

                    <form action="" class="form_call d-flex" id="formHome" name="contato">
                        <p style="width: 100%; text-align: center; padding: 0 10px" id="retorno_form_home"></p>

                        <div class="form_group f-50">
                            <input type="text" name="nome" id="nome_home" placeholder="Nome*" required>
                        </div>
                        <input type="hidden" name="null1" value="">
                        <input type="hidden" name="null2" value="">
                        <input type="hidden" name="contato_from" value="<?= home_url() ?>">
                        <div class="form_group f-50">
                            <input type="email" name="email" id="email_home" placeholder="E-mail*" required>
                        </div>
                        
                        <div class="form_group f-50">
                            <input type="text" name="cargo" id="cargo_home" placeholder="Cargo*">
                        </div>
						<div class="form_group f-50">
							<input type="text" name="telefone" id="telefone_home" placeholder="(00) 00000-0000*" required>
						</div>
						<div class="form_group w-100 p-10">
                            <input type="text" name="empresa" id="empresa_home" placeholder="Empresa*">
                        </div>
                        <div class="form_group w-100">
                            <textarea name="detalhes_caso" id="msg_home" cols="30" rows="8" placeholder="Deseja dizer algo sobre seu contato" required></textarea>
                        </div>
						<div class="form_row">
							<p style="padding-left: 10px; font-size: .875em"><small>(*) Campos obrigatórios</small></p>
						</div>
                        <div class="form_group w-100 form_group_button">
                            <button class="btn-blue" type="submit" id="sendHome">Enviar</button>
                        </div>
                    </form>

                </div>

                <div class="section_form_img">
                    <!-- 
                    <img src="<?= get_template_directory_uri() ?>/assets/img/telefonista2.png" alt="">   
                     -->
                </div>

            </div>

        </section>

        <section class="section_post" id="blog">

            <div class="container">
                <header class="header_post">
                    <h2 class="title-default">Leia os posts e conheça seus direitos</h2>
                </header>

                <div class="post_slide d-flex">
                    <?php
                        $args = [                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ];
                        $result = new WP_Query($args);

                        if($result->have_posts()):
                            while($result->have_posts()):
                                $result->the_post();
                    ?>
                    <article class="card_post">
                        <a href="<?= get_the_permalink() ?>">
                        <?php
                            $url_thumb = get_the_post_thumbnail_url(null, 'medium');
                        ?>
                            <img src="<?= $url_thumb != "" ? $url_thumb : get_template_directory_uri()."/assets/img/def.jpg" ?>" alt="">
                            <div class="card_post_info">
                                <h4 class="subtitle-default"><?= get_the_title() ?></h4>
                               
                                <p class="desc-default">
                                    <?= get_the_excerpt() ?>
                                </p>
                            </div>
                        </a>
                    </article>

                    <?php endwhile; endif; wp_reset_query() ?>

                </div>

                <div class="see_more">
                    <a class="subtitle-default text-uppercase" href="<?= home_url() ?>/blog">+ Veja Todos os Posts</a>
                </div>
            </div>

        </section>

        

    </main>
<?php get_footer() ?>