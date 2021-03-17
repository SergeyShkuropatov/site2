$(document).ready(function () {
    // //анимация на событие load класса imageHeader
    let logo = $('.logo');
    let forma = $('.forma');
    let imageHeader = document.querySelector('.imageHeader');
    let h1 = $('h1');
    let p = $('p');
    let link1 = $('.link1');
    let link2 = $('.link2');
    let height = $(window).height();

    function imageHeader_animate(){
        let centerHeight = window.innerHeight / 2;
            if(imageHeader.getBoundingClientRect().top <= centerHeight
                && imageHeader.getBoundingClientRect().bottom > centerHeight
            ){
                logo.animate({
                    top: 43 + 'px',
                    opacity: 1
                }, 1000);
                h1.animate({
                    left: 0,
                    opacity: 1
                }, 1000);
                p.animate({
                    top: 0 + 'px',
                    opacity: 1
                }, 1000);
                link1.animate({
                    left: 0,
                    opacity: 1
                }, 1000);
                link2.animate({
                    left: 0,
                    opacity: 1
                }, 1000);
                forma.animate({
                    top: 0,
                    opacity: 1
                }, 1000);
             }  
        }

        imageHeader_animate();

    window.addEventListener('scroll', function(){
        imageHeader_animate();   
    });

    // анимация на событие класса .our-task
    let our_task = document.querySelector('.our-task');
    let our_task_image = $('.our-task .image');
    let our_task_text = $('.our-task .text');
 
    function our_task_animate(){
        let centerHeight = window.innerHeight / 2;
            if(our_task.getBoundingClientRect().top <= centerHeight
                && our_task.getBoundingClientRect().bottom > centerHeight
            ){
                our_task_image.animate({
                    left: 0,
                    opacity: 1
                }, 1000);
                our_task_text.animate({
                    right: 0 ,
                    opacity: 1
                }, 1000);
               
             }  
        }
        our_task_animate();
    window.addEventListener('scroll', function(){
        our_task_animate();   
    });

     // анимация на событие класса your-ideas

    let your_ideas = document.querySelector('.your-ideas');
    let inner = document.querySelectorAll('.inner');
    var your_ideas_image = $('.your-ideas .image');

    function your_ideas_animation(){
        let widthWindow = window.innerWidth;
        let mobileVersionWidth = 750;
        let centerHeight = window.innerHeight / 2;
        if( widthWindow > mobileVersionWidth ){
            //логика декстопа 
            if(your_ideas.getBoundingClientRect().top <= centerHeight
                && your_ideas.getBoundingClientRect().bottom > centerHeight
            ){ 
                $('.inner').each(function(index, cardItem){
                    cardItem.classList.add('your_ideas_animation');
                    cardItem.style.animationDelay = index + 's';
                });
                your_ideas_image.animate({
                    left: 0,
                    opacity: 1,
                }, 1000);
             }
            
        }else{
            $('.inner').each(function(index, cardItem){
                if( cardItem.getBoundingClientRect().top <= centerHeight
                    && cardItem.getBoundingClientRect().bottom > centerHeight
                ){
                     cardItem.classList.add('your_ideas_animation');
                }
            });
            your_ideas_image.animate({
                left: 0,
                opacity: 1,
            }, 1000);
        }
    }

    your_ideas_animation();

    window.addEventListener('scroll', function(){
        your_ideas_animation();   
    });



    // анимация на событие класса quality-site

    let quality_site = document.querySelector('.quality-site');
    let quality_site_image = $('.quality-site .image');
    let quality_site_content = $('.quality-site .content');

    function quality_site_animate(){
        let centerHeight = window.innerHeight / 2;

            if(quality_site.getBoundingClientRect().top <= centerHeight
                && quality_site.getBoundingClientRect().bottom > centerHeight
            ){
                quality_site_image.animate({
                    right: 0,
                    opacity: 1
                }, 1000);
                quality_site_content.animate({
                     left: 0,
                    opacity: 1
                }, 1000);
             }  
        }

    quality_site_animate();

    window.addEventListener('scroll', function(){
        quality_site_animate();   
    });

// анимация на событие класса contacts

let contacts = document.querySelector('.contacts');
let contacts_h2 = $('.contacts h2');
let contacts_p = $('.contacts p');
let contacts_link = $('.contacts .link');

function contacts_animate(){
    let centerHeight = window.innerHeight / 2;

        if(contacts.getBoundingClientRect().top <= centerHeight
            && contacts.getBoundingClientRect().bottom > centerHeight
        ){
           
            contacts_h2.animate({
                right: 0,
                opacity: 1
            }, 1000);
            contacts_p.animate({
                left: 0,
                opacity: 1
             }, 1000); 
            contacts_link.animate({
               left: 0,
               opacity: 1
            }, 1000);
         }  
    }

    contacts_animate()

window.addEventListener('scroll', function(){
    contacts_animate() 
});


    // анимация на событие класса cost
 
let cost_h2=$('.cost h2');
let cost_line=$('.cost .line');
let common_price=document.querySelectorAll('.common-price')
let container=document.querySelector('.cost .container');
    function price_animation(){
        let widthWindow = window.innerWidth;
        let mobileVersionWidth = 750;
        let centerHeight = window.innerHeight / 2;
        
        if( widthWindow > mobileVersionWidth ){
            //логика декстопа 
            if(container.getBoundingClientRect().top <= centerHeight
                && container.getBoundingClientRect().bottom > centerHeight
            ){ 
                $('.common-price').each(function(index, cardItem){
                     cardItem.classList.add('price_animation');
                     cardItem.style.animationDelay = index +'s';
                });
    
                cost_h2.animate({
                    right: 0,
                    opacity: 1
                }, 1000);
                cost_line.animate({
                     left: 50 + '%',
                     marginLeft: -50 + 'px',
                    opacity: 1
                }, 1000);
             }
            
        }else{
            
                for (let i = 0; i < common_price.length ; i++) {
                if( common_price[i].getBoundingClientRect().top <= centerHeight
                    && common_price[i].getBoundingClientRect().bottom > centerHeight
                ){
                     common_price[i].classList.add('price_animation');
                }
            };
            cost_h2.animate({
                right: 0,
                opacity: 1
            }, 1000);
            cost_line.animate({
                 left: 50 + '%',
                 marginLeft: -50 + 'px',
                opacity: 1
            }, 1000);
        }
    }

    price_animation();

    window.addEventListener('scroll', function(){
        price_animation();   
    });


     // анимация на событие класса our-customers

    let our_customers = document.querySelector('.our-customers');
    let h2= $('.our-customers h2');
    let hr = $('.our-customers hr');
    let image=document.querySelectorAll('.our-customers .image');
    function our_customers_animation(){
        let widthWindow = window.innerWidth;
        let mobileVersionWidth = 750;
        let centerHeight = window.innerHeight / 2;

        if( widthWindow > mobileVersionWidth ){
            //логика декстопа 
            if(our_customers.getBoundingClientRect().top <= centerHeight
                && our_customers.getBoundingClientRect().bottom > centerHeight
            ){ 
                $('.image').each(function(index, cardItem){
                    cardItem.classList.add('our_customers_animation');
                    // cardItem.style.animationDelay = `${index}s`;
                });
      
                h2.animate({
                    left: 0,
                    opacity: 1
                }, 1000);
                hr.animate({
                     right: 0,
                    opacity: 1
                }, 1000);
             }
            
        }else if(our_customers.getBoundingClientRect().top <= centerHeight
            && our_customers.getBoundingClientRect().bottom > centerHeight
        ){
            $('.image').each(function(index, cardItem){
              cardItem.classList.add('our_customers_animation');
            //   cardItem.style.animationDelay = `${index}s`;
            });
            h2.animate({
                left: 0,
                opacity: 1
            }, 1000);
            hr.animate({
                right: 0,
                opacity: 1
            }, 1000);
        }
    }
    our_customers_animation();
    window.addEventListener('scroll', function(){
        our_customers_animation();   
    });


    // анимация на событие класса comments

    let comments_h2 = $('.comments h2');
    let comments_button = $('.question .question-box .button');
    let comments_slider_tablo = $('.question .question-box .slider-tablo');
    let owl_stage = $('.owl-stage');
    let comments = document.querySelector('.comments');

    function comments_animate(){
        let centerHeight = window.innerHeight / 2;

            if(comments.getBoundingClientRect().top <= centerHeight
                && comments.getBoundingClientRect().bottom > centerHeight
            ){
                comments_button.animate({
                    right: 0,
                    opacity: 1
                }, 1000);
                comments_h2.animate({
                    left: 0,
                    opacity: 1
                }, 1000);
                comments_slider_tablo.animate({
                    left: 0,
                    opacity: 1
                }, 1000);
                owl_stage.animate({
                    bottom: 0,
                    opacity: 1
                }, 1000);
             }  
        }
        comments_animate();
    window.addEventListener('scroll', function(){
        comments_animate();   
    });
     
// анимация на событие footer
let footer_container=document.querySelector('footer');
let button_social=document.querySelectorAll('.social ul li');
var coordinates = $('.coordinates');
    function button_social_animation(){
        let centerHeight = window.innerHeight / 2;
            if(footer_container.getBoundingClientRect().top <= centerHeight
                && footer_container.getBoundingClientRect().bottom > centerHeight
            ){ 
                $('.button_social').each(function(cardItem, index){
                    console.log(cardItem);
                    cardItem.classList.add('button_social_animation');
                    // cardItem.style.animationDelay = `${index}s`;
                });
                coordinates.animate({
                    left: 0 + 'px',
                    opacity: 1
                }, 1000);
                $('footer form').find("[name='name']").animate({
                    top: 0,
                    opacity: 1
                }, 300);
                $('footer form').find("[name='email']").animate({
                    top: 15 + 'px',
                    opacity: 1
                }, 1000);
                $('footer form').find("[name='text_contacts']").animate({
                    top: 30 + 'px',
                    opacity: 1
                }, 1700);
                $('footer button').animate({
                    top: 45 + 'px',
                    opacity: 1
                }, 2400);
             }   
          } 
    button_social_animation();
    window.addEventListener('scroll', function(){
        button_social_animation();   
    });

// Изменение цвета элемента с классом .scrollToTop когда он проходит через footer, классы contacts 
// и imageHeader 
let scrollToTop=document.querySelector('footer .scrollToTop');
    function arrow_color(){
        if((footer_container.getBoundingClientRect().top <= scrollToTop.getBoundingClientRect().bottom
        && footer_container.getBoundingClientRect().bottom > scrollToTop.getBoundingClientRect().top)
        ||
        (imageHeader.getBoundingClientRect().top <= scrollToTop.getBoundingClientRect().bottom
        && imageHeader.getBoundingClientRect().bottom > scrollToTop.getBoundingClientRect().top)
        ||
        (contacts.getBoundingClientRect().top <= scrollToTop.getBoundingClientRect().bottom
        && contacts.getBoundingClientRect().bottom > scrollToTop.getBoundingClientRect().top))
            { 
                scrollToTop.style.background="green";
             }else{
                scrollToTop.style.background="";
             }
          } 
    arrow_color();
    window.addEventListener('scroll', function(){
        arrow_color();   
    });

     // burger
     var burgerNavWidth = $(window).width();
     $('.burger').on('click',function(){
         if($('.burger-nav').hasClass('animated')) return;//если есть 
         //класс animated, то выходим из события
         $(".burger-nav").addClass('animated');
             if($(".burger").hasClass('active')) {
          $(".burger-nav").animate({
             'left': $(window).width() + 'px'
         }, 1000, function(){
             $('.burger-nav').removeClass('animated');
         });
          $(".burger").removeClass('active');
          }else  {
             $(".burger-nav").animate({
                 'left': 0
             }, 1000,function(){
                 $('.burger-nav').removeClass('animated'); 
             });
           $(".burger").addClass('active');
         }
      });
     
      $(window).resize(function(){
         let burgerNavWidth = $(window).width();
        //  console.log(burgerNavWidth);
         $(".burger-nav").css({'left': 'burgerNavWidth + "px"'});
     });

 //cкрытие burger-nav при нажатии на кнопку esc
 $(window).on('keyup',function(e){
     if(e.keyCode==27){
         $(".burger-nav").animate({
             'left': $(window).width() + 'px'
         }, 1000, function(){
             $('.burger').removeClass('active');
         });
     }
 })
 //cкрытие burger-nav при нажатии на элемент burger-nav
  $('.burger-nav').on('click',function(){ 
         $(".burger-nav").animate({
             'left': $(window).width() + 'px'
         }, 1000, function(){
             $('.burger').removeClass('active');
         });
 })
 

//Плавный скролл
    $('.imageHeader a[href]').on('click', function(e) {
        e.preventDefault();  
        var attrLink= $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(attrLink).offset().top - 200+'px'
            }, 5000);
    });
    $('.navigation a[href]').on('click', function(e) {
        e.preventDefault();  
        var attrLink= $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(attrLink).offset().top - 100+'px'
            }, 3000);
    });
    $('.burger-nav a[href]').on('click', function(e) {
        e.preventDefault();  
        e.stopPropagation();  
        var attrLink= $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(attrLink).offset().top - 100+'px'
            }, 3000);
    });
    $('.scrollToTop a[href]').on('click', function(e) {
        e.preventDefault();  
        var attrLink= $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(attrLink).offset().top - 100+'px'
            }, 3000);
    });
  
//Раскрываем скрытый текст при нажатии на кнопку "Подробнее"
$('.read-more').on('click',function(){
    if ($(this).prev().is(':hidden')){console.log($('.text-hidden').css("height"));
        $(this).addClass('active');
        $(this).html("Закрыть");
        $(this).animate({
            top: $(this).prev().css("height") 
        }, 3000);
        $(this).prev().slideDown(3000);
    }else{
    $(this).removeClass('active');
        $(this).prev().slideUp(3000);
        $(this).html("Подробнее");
        $(this).animate({
            top: 0 + 'px',
        }, 3000);
    }
})

// паралакс
let nav = document.querySelector('.nav');
let image_top = document.querySelector('.imageHeader');
window.addEventListener('scroll', function () {
    let top_nav = nav.getBoundingClientRect().top;
    let bottom_image_top = image_top.getBoundingClientRect().bottom;
    if (top_nav <= 0) {
        nav.classList.add('fixed');
    }
    if (bottom_image_top >= 0) {
        nav.classList.remove('fixed');
    }
});

//Делаем ссылки активными 
var f=0;
$(window).scroll(function(){
    $.each($('.active-link'),function(index,value){
        if(value.getBoundingClientRect().top<200){     
            f= '#'+$(value).attr('id');
        }
        $.each($('.navigation a'),function(index,value){
            if(f== $(value).attr('href')){
                $(value).addClass('link-active');
        }
            else{
                $(value).removeClass('link-active');
                }                  
            });
        });
    }); 

//отключение popup при нажатии на кнопку esc
$(window).on('keyup',function(e){
    if(e.keyCode==27){
        $('.question .popup').fadeOut();
    }
})
//отключение popup при нажатии на крестик
$('.krestic').on('click',function(){
    $('.question .popup').fadeOut();
});
//отключение popup2 при нажатии рядом с окном
$('.question .del').on('click',function(){
    $('.question .popup').fadeOut();
});   
//отключение popup2 при нажатии на кнопку esc
$(window).on('keyup',function(e){
    if(e.keyCode==27){
        $('.question2 .popup2').fadeOut();
    }
})
//отключение popup2 при нажатии на крестик
$('.krestic2').on('click',function(){
    $('.question2 .popup2').fadeOut();
});
//отключение popup2 при нажатии рядом с окном
$('.question2 .del2').on('click',function(){
    $('.question2 .popup2').fadeOut();
});
// Открытие класса phone при нажатии на кнопку "Связаться с нами" в классе contacts
$('.contacts .link').on('click',function(){
     $('.contacts .phone h3').css({opacity: 1});
})
// Скрытие класса phone в классе contacts
$('.contacts .phone').on('click',function(){
    $('.contacts .phone h3').css({opacity: 0});
});

// Открытие и cкрытие класса phone при нажатии на кнопку "Заказать" в классе cost
$('.cost .order').on('click', function () {
    if ($(this).children().is(':visible')) {
                $(this).children().slideUp(3000);
            } else { 
                $(this).children().slideDown(3000);
            }
});
$('.question .question-box .button').on('click',function() {
    $('.question .popup').css({display:"flex"});
  });

//прелоадер
var preloader = $(".preloader");

setTimeout(function(){
     preloader.fadeOut();
 }, 1500);




});


