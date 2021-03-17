<?
    include($_SERVER['DOCUMENT_ROOT']."/header.php"); 
    include($_SERVER['DOCUMENT_ROOT']."/db.php"); 
?>
<style>
    div.fon {
  background: rgba(0, 0, 255, 0.8);
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  text-align: center;
  font-size: 35px;
  font-weight: 700;
  color: #00ff00;
  display: none;
}
.watch a {
  background: green;
  padding: 10px 25px;
  border-radius: 15px;
  position: fixed;
  right: 50%;
  top: 60%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transform: translateX(50%);
          transform: translateX(50%);
  text-align: center;
  -webkit-transition: 3s all;
  transition: 3s all;
  text-decoration: none;
  z-index: 9999999;
  display: none;
}

.wrapper .content {
  -ms-flex-preferred-size: 250px;
      flex-basis: 250px;
  background: red;
  padding: 25px;
  margin: 25px 15px 15px 15px;
  display: inline-block;
  
}
 .return {
  position: fixed;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  right: 50%;
  bottom: 1px;
  -webkit-transform: translate(50%, -50%);
          transform: translate(50%, -50%);
  height: 100px;
  text-align: center;
  top: 40%;
  -webkit-transition: 3s all;
  transition: 3s all;
}

 .return a {
  background: rgba(35, 9, 233, 0.5);
  padding: 20px 25px;
  border: 2px solid red;
  border-radius: 15px 15px 0 0;
  text-decoration: none;
  color: #ffffff;
}

 .return div#more {
  background: rgba(35, 9, 233, 0.5);
  padding: 20px 25px;
  border: 2px solid red;
  border-radius: 0 0 15px 15px;
  text-decoration: none;
  color: #ffffff;
  cursor: pointer;
}

 button#more {
  background: red;
  margin-left: 550px;
  margin-bottom: 300px;
  border: 2px green solid;
}
.empty_base{
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
    background: rgba(35, 9, 233, 0.9);
    padding: 25px;
    color: #FFFFFF;
    font-size: 30px;
    text-align:center;
    position: fixed;
    top:0;
    left:0;
    right: 0;
    bottom: 0;
    display: none;
    line-height: 50px;
}

</style>
 <?php

            // Получаем данные из БД
        $sql_cards = "SELECT * FROM contacts  ORDER BY id LIMIT 1";
        $result_cards = mysqli_query($link, $sql_cards);

        while( $data_card = mysqli_fetch_assoc($result_cards) ){
            $template['data'][] = $data_card;
        } 
    ?>
    
   <!-- Рендиринг страницы -->
    <?php if($template['data'] == true) :?> 
        <!--<div class="book">-->
            <div class="wrapper">
                <div class="wrapper-content"  id="articles">
                    <?php  foreach( $template['data'] as $card_row ):  ?>
                        <div class="content">
                            <h3>Имя: <?= $card_row['name'] ?></h3>
                            <h3>E-mail: <?= $card_row['email'] ?></h3>
                            <h3>Текст: <?= $card_row['text_contacts'] ?></h3>
                            <h3>Дата:<?=  $card_row['date_create'] ?></h3>
                            
                        </div> 
                    <?php endforeach;?> 
                </div>
                
                <div class="return">
                    <a href="/">ВЕРНУТЬСЯ НА ГЛАВНУЮ СТРАНИЦУ</a>
                    <div id="more">ДОБАВИТЬ КЛИЕНТОВ ИЗ БД</div>
                </div>
                <div class="empty_base"><h3>КОНТАКТЫ В БАЗЕ ЗАКОНЧИЛИСЬ</h3></div>
            
            </div>
        <!--</div>-->
<?php endif; ?> 

<script type="text/javascript">

// let more = document.getElementById('more');
//  let articles = document.getElementById('articles');
// let content = document.querySelector('.content');
// var startFrom = 1;  // позиция с которой начинается вывод данных
//  more.addEventListener('click', function(){
//     let ajax = new XMLHttpRequest();
//     ajax.open('POST', '/ajax.items.php');
//     ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//     ajax.send('start=' + startFrom);
//     ajax.onreadystatechange = function(){
//         if( ajax.readyState == 4 && ajax.status == 200 ){
//             let data = JSON.parse(ajax.responseText); //тут будет js-массив
           
//             if (data !== null){console.log($(data));
//             data.forEach(function(product){
                
//               let commentList = document.createElement('div');
//                 commentList.classList.add('content');
//                 commentList.innerHTML =`
//                     <h3> Имя: ${product.fio} </h3>
//                     <h3> Text: ${product.email} </h3>
//                     <h3> Text: ${product.text} </h3>
//                     <h3> Дата: ${product.date_create} </h3>
//                 `;
//                 articles.appendChild(commentList); 
//             });
//             startFrom += 1;
//         }
//           else{ 
//                 $('.empty_base').css({"display":"flex"});
//                 setInterval(function(){
//                     $('.empty_base').css({"display":"none"});
//                 },3000);
//           }
//             // console.dir(data);       
//          }
//      }
// });



// после babel
var more = document.getElementById('more');
var articles = document.getElementById('articles');
console.log(more);
console.log(articles);
var content = document.querySelector('.content');
var startFrom = 1; // позиция с которой начинается вывод данных
more.addEventListener('click', function () {
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ajax.items.php');
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send('start=' + startFrom);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var data = JSON.parse(ajax.responseText); //тут будет js-массив

            if (data !== null) {
                console.log($(data));
                data.forEach(function (product) {

                    var commentList = document.createElement('div');
                    commentList.classList.add('content');
                    commentList.innerHTML = '\n                    <h3> \u0418\u043C\u044F: ' + product.fio + ' </h3>\n                    <h3> Text: ' + product.email + ' </h3>\n                    <h3> Text: ' + product.text + ' </h3>\n                    <h3> \u0414\u0430\u0442\u0430: ' + product.date_create + ' </h3>\n                ';
                    articles.appendChild(commentList);
                });
                startFrom += 1;
            } else {
                $('.empty_base').css({ "display": "flex" });
                setInterval(function () 
                {
                    $('.empty_base').css({ "display": "none" });
                }, 3000);
            }
            // console.dir(data);       
        }}
    //};
});

</script>

    <script src="jquery.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="shop-slider.js"></script>
    <script src="script.js"></script>
    </body>

</html>

