   <!-- footer -->
            <footer class="active-link" id="contacts-info">
                <div class="contacts-info" >
                    <div  class="coordinates">
                        <h2><i><span>Свяжитесь</span> с нами</i></h2>
                        <div class="contacts">
                            <div class="pe-7s-map-marker"></div><i>Большая Спаская ул.12, Москва, Россия</i>
                        </div>
                        <div class="contacts">
                            <div class="pe-7s-phone"></div><i>8(495)626-46-00</i>
                        </div>
                        <div class="contacts">
                            <div class="pe-7s-mail"></div>
                            <div class="email">
                                <span>moscow@</span><span>faststart.ru</span>
                            </div>
                        </div>
                        <div class="contacts">
                            <div class="pe-7s-look"></div><span>www.faststart.ru</span>
                        </div>
                    </div>
                    <form  method="POST" action="insert_contacts.php">
                        <input name="name"  type="text" placeholder="имя" >
                        <input name="email"  type="text" placeholder="email">
                        <textarea  name="text_contacts">Я хочу</textarea>
                        <button type="submit">Отправить запрос</button>
                    </form> 
                </div>

                <div class="social"> 
                    <ul>    
                        <li><a class="fa fa-twitter" href="https://twitter.com/"></a></li>
                        <li><a class="fa fa-facebook" href="https://www.facebook.com/"></a></li>
                        <li><a class="fa fa-google-plus" href="https://plus.google.com/"></a></li>
                        <li><a class="fa fa-instagram" href="https://instagram.com/"></a></li>
                    </ul>
                    <div class="scrollToTop">
                        <a href="#top">
                            <div  class="circle">
                                <div  class="arrow"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!--Заставка после отправки формы аяксом-->
                <div class="fon">
                <div>
                    МЫ ПОЛУЧИЛИ ВАШИ КОНТАКТЫ.<br> 
                    ЗДЕСЬ НАШИ КЛИЕНТЫ.
                </div> 
            </div> 
            <div class="watch"><a href="contacts.php">ПОСМОТРЕТЬ КЛИЕНТОВ</a></div> 
            </footer> 
        </div> <!--wrapper-->
    </div> <!--faststart-->
    <script src="jquery.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script> 
    <script src="shop-slider.js"></script> 
    <script src="dispatch_form_ajax.js"></script>
    <script src="script.js"></script>
</body>
</html> 