const close_cta_top = document.querySelector('.close_cta_top'); //button close cta
const cta_top = document.querySelector('.cta_top');
const item_ask = document.querySelectorAll('.list_ask li h4');
const item_ask_p = document.querySelectorAll('.list_ask li p');
const icon_item = document.querySelectorAll('.list_ask li h4 i');
const btn_menu = document.querySelector('.btn_menu');
const nav_menu = document.querySelector('nav.menu');
const btn_close_menu = document.querySelector('.btn_close_menu');
const office_uni = document.querySelector('.office_uni');
const office_carousel = document.querySelectorAll('.office_carousel'); //all offices slides
const over_body = document.querySelector('.over_body');
const submenus_item = document.querySelectorAll('nav.menu ul li.menu-item-has-children');
const submenus = document.querySelectorAll('nav.menu ul li.menu-item-has-children ul.sub-menu');


$(document).ready(function(){
    $("#slide_hero").owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $("#office_slide").owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:1500,
        callbacks: true,
        transitionStyle: 'backSlide',
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $("#client_slide").owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout: 8000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $("#follow_right").owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                nav: true
            },
            1000:{
                items:3,
                nav: true
            }
        }
    });


    $("#slide_carousel_main_office").owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
            }
        }
    });
});
/*

close_cta_top.addEventListener('click', () => {

    cta_top.classList.add('d-none');

});
*/

//function to verify if element is on screen
function isOnScreen(el){
    let rect = el.getBoundingClientRect();
    return rect.top > 0 && rect.bottom < window.innerHeight;
}

const elemento = document.querySelectorAll('.onscreen');

document.addEventListener('scroll', () => {

    elemento.forEach((item) => {
        if(isOnScreen(item)){
            
            if(item.classList.contains('onscreen_down')){
                item.classList.remove('onscreen');
                item.classList.add('animate__animated','animate__bounceInDown');

                if(item.classList.contains('delay-1')){
                    item.style.setProperty('--animate-duration', '0s');
                }
                if(item.classList.contains('delay-2')){
                    item.style.setProperty('--animate-duration', '1.5s');
                }
                if(item.classList.contains('delay-3')){
                    item.style.setProperty('--animate-duration', '2s');
                }
                if(item.classList.contains('delay-4')){
                    item.style.setProperty('--animate-duration', '2.5s');
                }
                if(item.classList.contains('delay-5')){
                    item.style.setProperty('--animate-duration', '3s');
                }
                if(item.classList.contains('delay-6')){
                    item.style.setProperty('--animate-duration', '3.5s');
                }
            }
            if(item.classList.contains('onscreen_zoom')){
                item.classList.remove('onscreen');
                item.classList.add('animate__animated','animate__zoomIn');

                if(item.classList.contains('delay-2')){
                    item.style.setProperty('--animate-duration', '1.5s');
                }
                if(item.classList.contains('delay-3')){
                    item.style.setProperty('--animate-duration', '2s');
                }
                if(item.classList.contains('delay-4')){
                    item.style.setProperty('--animate-duration', '2.5s');
                }
                if(item.classList.contains('delay-5')){
                    item.style.setProperty('--animate-duration', '3s');
                }
            }

        } 
    })
   
    
})

item_ask.forEach((item, index) => {

    item.addEventListener('click', (e) => {

        if(item_ask_p[index]){

            
            
            if(item_ask_p[index].classList.contains('open_list_p')){

                item_ask_p[index].classList.remove('open_list_p');
                icon_item[index].classList.replace('bi-plus','bi-dash');
                
                item_ask.forEach((item) => {
                    item.classList.remove('bg-blue-dark');
                    item.classList.remove('color-blue-dark');
                    
                })
    
            }else{
                item_ask_p.forEach((item2) => {
    
                    item2.classList.remove('open_list_p');
        
                });

                item_ask.forEach((item) => {
                    item.classList.remove('bg-blue-dark');
                    item.classList.remove('color-blue-dark');
                    
                })
        
                item_ask_p[index].classList.add('open_list_p');
                icon_item[index].classList.replace('bi-dash','bi-plus');
                item.classList.add('bg-blue-dark');
                item.classList.add('color-blue-dark');
        
            }
        }
        
    });

})


btn_menu.addEventListener('click', () => {

    nav_menu.classList.add('open_menu_mobile');
    over_body.classList.add('open_over_body');
    document.querySelector('header.header').classList.remove('show_down_header');

});

btn_close_menu.addEventListener('click', () => {

    nav_menu.classList.remove('open_menu_mobile');
    over_body.classList.remove('open_over_body');

});

over_body.addEventListener('click', () => {

    nav_menu.classList.remove('open_menu_mobile');
    over_body.classList.remove('open_over_body');

});


let count_slides = 1;

if(office_carousel){

    office_carousel.forEach((item) => {

        let id_office = item.getAttribute('id');

        console.log('id: ',id_office);
        
        $(`#${id_office}`).owlCarousel({
            loop:true,
            margin:10,
            lazyLoad: true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                    nav: true
                }
            }
        });
        count_slides++;

    })
}



//=================================== form home send ==========================================
/*
$("form#formHome").submit(function(e) {

    e.preventDefault();

    const btn_send_home = document.getElementById('sendHome');

    btn_send_home.innerHTML = "Enviando...";

    //======= get the fields ==========
    let nome = document.getElementById('nome_home');
    let email = document.getElementById('email_home');
    let empresa = document.getElementById('empresa_home');
    let cargo = document.getElementById('cargo_home');
    let msg = document.getElementById('msg_home');
    //======= get the fields ==========

    //=========== valida fields =====================
    if(nome.value == "" || email.value == "" || msg.value == ""){
        if(nome.value == ""){
            nome.style.border = "1px solid red"
        }
        if(email.value == ""){
            email.style.border = "1px solid red"
        }
        if(msg.value == ""){
            msg.style.border = "1px solid red"
        }

        setTimeout(function(){
            nome.style.border = "none";
            email.style.border = "none";
            msg.style.border = "none";
        }, 2000);
        btn_send_home.innerHTML = "Enviar";

    //=========== valida fields =====================
    }else{

        var formData = new FormData(this);
        console.log('caiu no else')

        $.ajax({
            url: url_site+'/submit_form.php',
            type: 'POST',
            data: formData,
            success: function (data) {
                console.log('caiu no success')
    
                switch(data){
                    case "5":
                        document.getElementById("retorno_form_home").innerHTML = "<strong style='color: orange'>Erro incomum </strong>";
                        document.getElementById('sendHome').innerHTML = "Enviar";
                    break;
                    case "4":
                        document.getElementById("retorno_form_home").innerHTML = "<strong style='color: red'> Preencha todos os campos </strong>";
                        document.getElementById('sendHome').innerHTML = "Enviar";
                    break;
                    case "1":
                        document.getElementById("retorno_form_home").classList.add('bg-green');
                        document.getElementById("retorno_form_home").innerHTML = "<strong class='color-green'> Recebemos sua mensagem, em breve entraremos em contato! </strong>";
                        document.getElementById('sendHome').innerHTML = "Enviar";
    
                        nome.value = "";    
                        email.value = "";
                        empresa.value = "";
                        cargo.value = "";
                        msg.value = "";
    
                        setTimeout(function(){
                            document.getElementById("retorno_form_home").innerHTML = "";
                            document.getElementById("retorno_form_home").classList.remove('bg-green');
                        }, 4000)
                    break;
                    default:
                        document.getElementById("retorno_form_home").innerHTML = "<strong style='color: orange'>Erro desconhecido</strong>"+data;
                        document.getElementById('sendHome').innerHTML = "Enviar";
                }
    
                setTimeout(function(){
    
                    //document.getElementById("retorno_form_home").innerHTML = "";
                    document.getElementById('sendHome').innerHTML = "Enviar";
    
                }, 4000);
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
    

    
});
*/


document.addEventListener('scroll', () => {

    const header = document.querySelector('header.header');
    const header_rec = header.getBoundingClientRect().height;
   

    let altura = window.scrollY;

    if(altura > 110 && !over_body.classList.contains('open_over_body')){
        header.classList.add('show_down_header');
        document.querySelector('body').style.paddingTop = header_rec+'px';
    }else{
        header.classList.remove('show_down_header');
        document.querySelector('body').style.paddingTop = 0+'px';

    }

  

});

if(window.matchMedia('(max-width: 1024px)').matches){

    submenus_item.forEach((item, index) => {

        item.addEventListener('click', (e) => {

            e.preventDefault();

            if(submenus[index].classList.contains('open_submenu')){

                submenus[index].classList.remove('open_submenu')

            }else{
                submenus.forEach((item2) => {
            
                    item2.classList.remove('open_submenu');
    
                });
    
                submenus[index].classList.add('open_submenu')
            }

        });

    });

}


//funcao que anima a contagem dos numeros da pagina sobre
function counterNumberPageSobre(){
    const tempo_intervalo = 5; //ms -> define a velocidade da animação
    const tempo = 4000; //ms -> define o tempo total da animaçao
    
    $('.counter-up').each(function() {
        if($(this).text() == "0"){
            let count_to = parseInt($(this).data('countTo'));
            let intervalos = tempo / tempo_intervalo; //quantos passos de animação tem
            let incremento = count_to / intervalos; //quanto cada contador deve aumentar
            let valor = 0;
            let el = $(this);
            
            let timer = setInterval(function() {
                if(valor >= count_to){ //se já contou tudo tem de parar o timer
                    valor = count_to;
                    clearInterval(timer);
                }
                
                let texto = valor.toFixed(0).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
                el.text(texto);
                valor += incremento;
    
            }, tempo_intervalo);
        }
        
    });
}

document.addEventListener('scroll', () => {
    if(document.querySelector('.first_elemento_card_number')){
        if(isOnScreen(document.querySelector('.first_elemento_card_number'))){
            counterNumberPageSobre();
        }
    }
})


//=========================== send form by submitform (formulario home page) ====================================
document.getElementById('sendHome').addEventListener('click', function(e){

    e.preventDefault();

    let nameForm = document.getElementById('nome_home').value;
    let empresaForm = document.getElementById('empresa_home').value;
    let emailForm = document.getElementById('email_home').value;
    let cargoForm = document.getElementById('cargo_home').value;
	let msgForm = document.getElementById('msg_home').value;
	
	if(nameForm == "" || empresaForm == "" || emailForm == "" || cargoForm == ""){
		if(nameForm == ""){
			document.getElementById('nome_home').style.border = "1px solid red"
		}
		if(empresaForm == ""){
			document.getElementById('empresa_home').style.border = "1px solid red"
		}
		if(emailForm == ""){
			document.getElementById('email_home').style.border = "1px solid red"
		}
		if(cargoForm == ""){
			document.getElementById('cargo_home').style.border = "1px solid red"
		}
		setTimeout(function(){
			
			document.getElementById('nome_home').style.border = "1px solid #ffffff";
			document.getElementById('empresa_home').style.border = "1px solid #ffffff";
			document.getElementById('email_home').style.border = "1px solid #ffffff";
			document.getElementById('cargo_home').style.border = "1px solid #ffffff";
			
		}, 1500)
	}else{
		this.innerText = "Enviando...";
		
		$.ajax({
        method: 'POST',
        url: 'https://formsubmit.co/ajax/informativo@marcosrdias.com.br',
        dataType: 'json',
        accepts: 'application/json',
        data: {
            _subject: "Contato do site marcosrdias.com.br",
            nome: nameForm,
            empresa: empresaForm,
            email: emailForm,
            cargo: cargoForm,
			mensagem: msgForm
        },
        success: (data) => {
            console.log(data);
            document.getElementById('retorno_form_home').innerText = "Agradecemos o Contato";
            setTimeout(function(){
                document.getElementById('retorno_form_home').innerText = "";
            }, 3000);
            this.innerText = "Enviar";

            document.getElementById('nome_home').value = "";
            document.getElementById('empresa_home').value = "";
            document.getElementById('email_home').value = "";
            document.getElementById('cargo_home').value = "";
	        document.getElementById('msg_home').value = "";

            //window.location.href = "https://institutomrd.marcosrdias.com.br/obrigado";

        },
        error: (err) => {
            console.log(err);
            document.getElementById('retorno_form_home').innerText = err;

            document.getElementById('nome_home').value = "";
            document.getElementById('empresa_home').value = "";
            document.getElementById('email_home').value = "";
            document.getElementById('cargo_home').value = "";
	        document.getElementById('msg_home').value = "";
        }
    });
	}

    
})
