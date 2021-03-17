  
//  $(document).ready(function(){
//   Отправка формы в классе imageHeader
  let contacts_top = document.querySelector('.forma form');

  contacts_top.addEventListener('submit',function(e){
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    let email = this.querySelector('[name=email]').value;
    let name = this.querySelector('[name=name]').value;
    let text_contacts = this.querySelector('[name=text_contacts]').value;
    
    
    if(name=="" || email=="" || text_contacts==""){ 
      $('.question2 .popup2').css({display:"flex"});
         $('.question2 .popup-content2 p').html("<h1>Вы ввели не все данные</h1>");
     }
    else{
         if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
             $('.question2 .popup2').css({display:"none"});
         
         
    xhr.open('POST','insert_contacts.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('name=' + name +'&email=' + email +"&text_contacts=" + text_contacts);

  xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){console.log(xhr.responseText);
            if(xhr.responseText=='Yes'){
                  contacts_top.reset();
                  $('footer .fon').css({"display":"flex"});
                      $('.watch a').css({"display":"flex"});
                setInterval(function(){
                    $('footer .fon').css({"display":"none"});
                      $('.watch a').css({"display":"none"});
                },8000);
            }else{console.log(xhr.responseText);
               
            }
   
        }
    }
    
    }else{
             $('.question2 .popup2').css({display:"flex"});
             $('.question2 .popup-content2 p').html("<h1>Вы неправильно ввели email</h1>");  
             
         } 
    }
    
});

  //Отправка формы в классе comments

  let comments = document.querySelector('.question form');
    comments.addEventListener('submit',function(e){
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    let email = this.querySelector('[name=email]').value;
    let name = this.querySelector('[name=name]').value;
    let text_comment = this.querySelector('[name=text_comment]').value;
    
      if((name=="") || (email=="") || (text_comment=="")){ 
      $('.question2 .popup2').css({display:"flex"});
         $('.question2 .popup-content2 p').html("<h1>Вы ввели не все данные</h1>");
     }
    else{
         if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
             $('.question2 .popup2').css({display:"none"});
         
    xhr.open('POST', 'insert_comments.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('name=' + name +'&email=' + email +"&text_comment=" + text_comment);
    

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            $('.question .popup').fadeOut();
          if(xhr.responseText=='Yes'){
                comments.reset();
                $('.question .popup').fadeOut();
                  $('.comments .fon').css({"display":"flex"});
                setInterval(function(){
                    $('.comments .fon').css({"display":"none"});
                 },3000);
            }else{
                window.location='error.php';
            }
   
        }
    }
    }else{
             $('.question2 .popup2').css({display:"flex"});
             $('.question2 .popup-content2 p').html("<h1>Вы неправильно ввели email</h1>");  
             
         } 
    }
    
});


//   Отправка формы  в footer
  let contacts_bottom = document.querySelector('footer form');
  contacts_bottom.addEventListener('submit',function(e){
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    let email = this.querySelector('[name=email]').value;
    let name = this.querySelector('[name=name]').value;
    let text_contacts = this.querySelector('[name=text_contacts]').value;
    
    
    if(name=="" || email=="" || text_contacts==""){ 
      $('.question2 .popup2').css({display:"flex"});
         $('.question2 .popup-content2 p').html("<h1>Вы ввели не все данные</h1>");
     }
    else{
         if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
             $('.question2 .popup2').css({display:"none"});
         
         
    xhr.open('POST','insert_contacts.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('name=' + name +'&email=' + email +"&text_contacts=" + text_contacts);

  xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){console.log(xhr.responseText);
            if(xhr.responseText=='Yes'){
                  contacts_bottom.reset();
                  $('footer .fon').css({"display":"flex"});
                      $('.watch a').css({"display":"flex"});
                setInterval(function(){
                    $('footer .fon').css({"display":"none"});
                      $('.watch a').css({"display":"none"});
                },8000);
            }else{console.log(xhr.responseText);
               
            }
   
        }
    }
    
    }else{
             $('.question2 .popup2').css({display:"flex"});
             $('.question2 .popup-content2 p').html("<h1>Вы неправильно ввели email</h1>");  
             
         } 
    }
    
});
// });

