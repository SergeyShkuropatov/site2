<?php

    include($_SERVER['DOCUMENT_ROOT']."/header.php"); 
    include($_SERVER['DOCUMENT_ROOT']."/db.php"); 
?>
    <div class="faststart">
        <div class="wrapper">
            <header>
                <div class="imageHeader" id="imageHeader">
                    <div class="wrapper">
                        <div class="logo"></div>
                        <div class="container">
                            <div class="text">
                                <h1>Разработка сайтов любой сложности</h1>
                                <p>
                                    FastStart - команда опытных профессионалов по
                                    реализации задач любой сложности в области
                                    web-разработки и программирования.
                                    В кратчайшие сроки мы реализуем все ваши
                                    идеи и мысли и дадим мощный толчок вашему
                                    бизнесу!
                                </p>
                                <div class="links">
                                    <a href="#our-task" class="link1">О нас</a>
                                    <a href="#cost"  class="link2">Стоимость</a>
                                </div>
                            </div>
                            <div  class="forma">
                                <h3 class="aaa">СВЯЖИТЕСЬ СО МНОЙ</h3>
                                <form  method="POST" action="insert_contacts.php">
                                    <input name="name"  type="text" placeholder="имя" >
                                    <input name="email"  type="text" placeholder="email">
                                    <textarea  name="text_contacts">Я хочу</textarea>
                                    <input  type="submit"  value="ОТПРАВИТЬ ЗАПРОС">
                                    <p  class="text-form">
                                        Нажимая кнопку "ОТПРАВИТЬ ЗАПРОС" Вы даете согласие на обработку личных данных
                                        в соотстветствии правилами политики конфиденциальности.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <div class="burger-nav">       
                        <div><a href="#imageHeader">ГЛАВНАЯ</a></div>
                        <div><a href="#our-task">О НАС</a></div>
                        <div><a href="#contacts">КОНТАКТЫ</a></div>  
                    </div>
                    <a  class="logo" href="/"></a>
                    <div  class="navigation">
                        <a href="#our-task">О нас</a>
                        <a href="#your-ideas">Преимущества</a>
                        <a href="#contacts-info">Как заказать</a>
                        <a href="#cost">Стоимость</a>
                        <a href="#comments">Отзывы</a>
                        <a href="#contacts">Контакты</a>
                    </div>
                    <div  class="burger">
                        <div></div>
                    </div>
                </div>
            </header>
            <section class="our-task active-link" id="our-task">
                <div  class="wrapper">
                    <div  class="image"></div>
                    <div  class="text">
                        <h2>Наша главная задача - сделать ваш бизнес в интернете уникальным.</h2>
                        <p>
                            Для нас нет сложных задач. Мы разрабатываем не просто интернет-ресурсы
                            для бизнеса, а создаем уникальные
                            сайты и порталы, которые максимально удовлетворяют потребности любого,
                            даже самого требовательного, пользователя.
                        </p>
                        <div class="text-hidden">
                            <p>За счёт оптимизации внутренних процессов, многие работы по разработке сайта выполняются
                                параллельно.
                                Это позволяет нам сократить время выкладки сайта, не увеличивая при этом итоговую цену.
                            </p>
                            <p>Стоимость разработки сайта считается исходя из необходимого функционала и трудозатрат.
                                При ограниченном бюджете есть возможность упростить некоторые этапы или изменить перечень
                                функционала.
                                Стоимость создания проекта начинается от 15 000 руб.
                            </p>
                            <p>Стоимость разработки сайта считается исходя из необходимого функционала и трудозатрат.
                                При ограниченном бюджете есть возможность упростить некоторые этапы или изменить перечень
                                функционала.
                                Стоимость создания проекта начинается от 15 000 руб.
                            </p>
                        </div>
                        <div class="read-more">Подробнее</div>
                    </div>
                </div>
            </section>
            <section class="your-ideas active-link" id="your-ideas">
                <h2>Превращаем самые невероятные идеи в реальность</h2>
                <p>Если вы еще не знаете чего хотите, то мы придумаем все за вас!</p>
                <div  class="wrapper">
                    <div  class="image"></div>
                    <div  class="text">  
                        <div  class="pe-7s-notebook inner">
                            <h3>Уникальный подход</h3>
                            <p>Мы подходим к идеям разработки с самых необычных сторон, что позволяет удивлять
                                будущих пользователей.
                            </p>
                        </div>
                        <div class="pe-7s-cash inner">
                            <h3>Монетизация</h3>
                            <p>
                                Правильный дизайн быстро приводит потенциальных клиентов к покупке, поэтому наша
                                команда уделяет этому самую важную роль
                            </p>
                        </div>
                        <div  class="pe-7s-cart inner">
                            <h3>Повышение функционала</h3>
                            <p>Разработанные нами проекты всегда готовы к дополнительным расширеням функционала. За
                                счет гибкости разработки, мы в кратчайшие добавим новые модули и решения
                            </p>
                        </div>
                        <div  class="pe-7s-users inner">
                            <h3>Оптимизация процессов</h3>
                            <p>Весь оборот и отчетность по клиентам будут доступны в специальной системе userBox,
                                которая разработана нашей командой для оптимизации процессов работы с клиентами
                            </p>
                        </div>  
                    </div>
                </div>
            </section>
            <section  class="quality-site">
                <div  class="content">
                    <h2>Качественный сайт в разумные сроки</h2>
                    <p>За счёт оптимизации внутренних процессов, многие работы по разработке сайта выполняются
                        параллельно.
                        Это позволяет нам сократить время выкладки сайта, не увеличивая при этом итоговую цену.
                    </p>
                    <p>Стоимость разработки сайта считается исходя из необходимого функционала и трудозатрат.
                        При ограниченном бюджете есть возможность упростить некоторые этапы или изменить перечень
                        функционала.
                        Стоимость создания проекта начинается от 15 000 руб.
                    </p>
                    <div class="text-hidden">
                        <p>За счёт оптимизации внутренних процессов, многие работы по разработке сайта выполняются
                            параллельно.
                            Это позволяет нам сократить время выкладки сайта, не увеличивая при этом итоговую цену.
                        </p>
                        <p>Стоимость разработки сайта считается исходя из необходимого функционала и трудозатрат.
                            При ограниченном бюджете есть возможность упростить некоторые этапы или изменить перечень
                            функционала.
                            Стоимость создания проекта начинается от 15 000 руб.
                        </p>
                        <p>За счёт оптимизации внутренних процессов, многие работы по разработке сайта выполняются
                            параллельно.
                            Это позволяет нам сократить время выкладки сайта, не увеличивая при этом итоговую цену.
                        </p>
                        <p>Стоимость разработки сайта считается исходя из необходимого функционала и трудозатрат.
                            При ограниченном бюджете есть возможность упростить некоторые этапы или изменить перечень
                            функционала.
                            Стоимость создания проекта начинается от 15 000 руб.
                        </p>
                    </div>
                    <div class="read-more">Подробнее</div>
                </div>
                <div  class="image"></div>
           </section>
            <section  class="contacts active-link" id="contacts">
                <div  class="image">
                     <div class="phone">
                        <h3>8(495)626-46-00</h3>
                    </div>
                    <h2>Хотите узнать, как развить свой бизнес?</h2>
                    <p>
                        Свяжитесь с нами и мы расскажем о том, что подойдет именно для вашего
                        бизнеса и какие инструменты мы будем использовать.
                    </p>
                    <div class=link>Cвязаться с нами</div>
                </div>
            </section> 
            <section class="cost active-link" id="cost">
                <h2>СТОИМОСТЬ</h2>
                <div class="line"></div>
                <div  class="container">
                    <div  class="common-price price1 pe-7s-radio pe-5x">
                        <h3>Сайт-визитка</h3>
                        <div  class="price">
                            <span  class="price-1">от</span><br>
                            <span  class="price-2">15</span>
                            <span  class="price-3">тыс. руб.</span>
                        </div>
                        <ul  class="text">
                            <li><strong>1</strong>  страница <br> <hr> </li>
                            <li><strong>Эксклюзивный </strong> дизайн <br> <hr> </li>
                            <li><strong>Адаптивная </strong> верстка <br> <hr> </li>
                            <li><strong>Внутренняя </strong> оптимизация <br> <hr> </li>
                            <li><s>Платформа userBox</s> <br> <hr> </li>
                        </ul>
                        <div class="order">ЗАКАЗАТЬ
                            <div class="phone">
                                <p>8(495)626-46-00</p>
                            </div>
                        </div>
                    </div>
                    <div class="common-price price2 pe-7s-joy pe-5x">
                        <h3>Сайт компании</h3>
                        <div  class="price">
                            <span  class="price-1">от</span><br>
                            <span  class="price-2">40</span>
                            <span  class="price-3">тыс. руб.</span>
                        </div>
                        <ul  class="text">
                            <li>до <strong>10</strong> страница  <br> <hr> </li>
                            <li><strong>Эксклюзивный </strong> дизайн  <br> <hr> </li>
                            <li><strong>Адаптивная </strong> верстка  <br> <hr> </li>
                            <li><strong>Внутренняя </strong> оптимизация  <br> <hr> </li>
                            <li><s>Платформа userBox</s>  <br> <hr> </li>
                        </ul>
                        <div class="order">ЗАКАЗАТЬ
                            <div class="phone">
                                <p>8(495)626-46-00</p>
                            </div>
                        </div>
                    </div>
                    <div  class="common-price price3  pe-7s-science pe-5x">
                        <h3>Магазин</h3>
                        <div  class="price">
                            <span  class="price-1">от</span><br>
                            <span  class="price-2">220</span>
                            <span  class="price-3">тыс. руб.</span>
                        </div>

                        <ul  class="text">
                            <li><strong>Эксклюзивный </strong> дизайн  <br> <hr> </li>
                            <li><strong>Адаптивная </strong> верстка  <br> <hr> </li>
                            <li><strong>Внутренняя </strong> оптимизация  <br> <hr> </li>
                            <li><strong>Маркетинг</strong> решения  <br> <hr> </li>
                            <li>Платформа <strong>userBox</strong>  <br> <hr> </li>
                        </ul>
                        <div class="order">ЗАКАЗАТЬ
                            <div class="phone">
                                <p>8(495)626-46-00</p>
                            </div>
                        </div>
                    </div>
                    <div class="common-price price4 pe-7s-tools pe-5x">
                        <h3>Интернет портал</h3>
                        <div  class="price">
                            <span  class="price-1">от</span><br>
                            <span  class="price-2">500</span>
                            <span  class="price-3">тыс. руб.</span>
                        </div>
                        <ul  class="text">
                            <li><strong>Эксклюзивный </strong> дизайн <br> <hr> </li>
                            <li><strong>Адаптивная </strong> верстка <br> <hr> </li>
                            <li><strong>Внутренняя </strong> оптимизация <br> <hr> </li>
                            <li><strong>Маркетинг </strong> решения <br> <hr> </li>
                            <li>Платформа <strong>userBox</strong> <br> <hr> </li>
                        </ul>
                        <div class="order">ЗАКАЗАТЬ
                            <div class="phone">
                                <p>8(495)626-46-00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section  class="our-customers">
                <h2>НАШИ КЛИЕНТЫ</h2>
                <hr>
                <div  class="container">
                    <div  class="image image1"></div>
                    <div  class="image image2"></div>
                    <div  class="image image3"></div>
                    <div  class="image image4"></div>
                </div>
            </section> 


    <!-- comments -->
    <?php
                // Получаем данные из БД
                $sql_cards = "SELECT * FROM comments  ORDER BY id DESC LIMIT 10";
                $result_cards = mysqli_query($link, $sql_cards);
                while( $data_card = mysqli_fetch_assoc($result_cards) ){
                    $template_select['data'][] = $data_card;
                } 
    ?>
               <!-- Рендиринг класса comments   -->
            <section class="comments active-link" id="comments">    
                <?php if(isset($template_select['data']) && $template_select['data']== true) :?> 
                    <h2><span>ВАШИ ОТЗЫВЫ</span></h2>
                    <div id="shopSleder" class="owl-carousel">
                        <?php foreach( $template_select['data'] as $card_row ): ?>
                            <div class="comment animat">
                                <div class="avatar"><img src="<?= $card_row['avatar'] ?>" alt="avatar"/></div>
                                <div class="name"><?= $card_row['name'] ?></div>
                                <div class="text_comment"><?= $card_row['text_comment'] ?></div>
                                <div class="email"><?= $card_row['email'] ?></div>
                                <div class="date_create"><?= $card_row['date_create'] ?></div>
                            </div>
                        <?php endforeach;?> 
                    </div>
                <?php endif;?>
            <!-- popup -->
                <div class="question">
                     <div class="question-box">
                        <div class="slider-tablo"> 
                            <a href="#!"> <img  id="arrow-left" src="images/header-slider-left.svg" alt="arrow-left"></a>
                            &nbsp;
                            <div class="tablo-left"></div>
                            <span>/</span>
                            <div class="tablo-right"></div>
                            &nbsp;
                            <a href="#!"> <img id="arrow-right" src="images/header-slider-right.svg" alt="arrow-right"></a>
                        </div>  
                        <div class="button">Оставьте свой комментарий</div>     
                    </div>          
                    <div class="popup">          
                        <div class="popup-content">
                            <div class="krestic">&#10006;</div>
                            <h4>Введите имя и комментарий</h4>
                            <form id="index" method="POST" action="insert_comments.php">
                                <input type="text" name="name" placeholder="имя">
                                <input type="text" name="email" placeholder="email">
                                <textarea  name="text_comment"></textarea>
                                <button class="button-form-comment" type="submit">Отправить</button>
                            </form>
                        </div>
                        <div class="del"></div>
                    </div> 
                </div> 
        
    
        
         <!-- popup на валидацию формы комментариев-->
                <div class="question2">         
                   <div class="popup2">          
                        <div class="popup-content2">
                            <div class="krestic2">&#10006;</div>
                            <p></p>
                        </div>
                        <div class="del2"></div>
                   </div> 
                </div>  
            
            <!--Заставка после отправки формы аяксом-->
            <div class="fon">
                <div>
                    ВАШИ КОММЕНТАРИИ ЗАПИСАНЫ.
                </div> 
            </div> 
            </section>
            
            
            <!--<div class="preloader">-->
            <!--    <div class="fon-preloader"></div>-->
            <!--</div>-->

    <?php
       include($_SERVER['DOCUMENT_ROOT']."/footer.php"); 
    ?> 