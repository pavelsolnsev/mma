<footer class="footer">
    <div class="container">
        <div class="footer__box">
            <div class="footer__logo"><img src="img/footer/logo.svg" alt="Synergy master class. Большая цель достижима" class="footer__logo-img"></div>
            <div class="footer__form">
                {{ form.form( 'reg', form_class='form_horisontal') }}
            </div>
            <ul class="footer__list">
                <li>
                    <a href="#">Партнёрам и организаторам мероприятий</a>
                    <a href="mailto:help@mma.local"><strong>help@mma.local</strong></a>
                </li>
                <li><a href="#"><strong>Мы всегда готовы вам помочь - звоните или пишите</strong></a></li>
                <li class="footer__list-item">
                    <div>
                        <a href="/privacy">Пользовательское соглашение</a>
                        <a href="">Публичная оферта</a>
                    </div>
                    <div>
                        <a href="/privacy">Политика конфиденциальности</a>
                        <a href="">Политика возврата</a>
                    </div>
                </li>
                <!--<li><a class="inactive-link" href="#"></a></li>-->
                <li class="footer__list-faq"><a onclick="$('#popup-faq').show();" style="cursor: pointer">Задать вопрос</a></li>
                <li><a href="/requisites">Реквизиты</a></li>
            </ul>
        </div>
        <div class="footer__social">
            <div class="footer__social-text">Сетевое издание &laquo;ММА.РФ&raquo; зарегистрировано в&nbsp;Федеральной службе по&nbsp;надзору в&nbsp;сфере связи, информационны технологий и&nbsp;массовых коммуникаций (Роскомнадзор). Свидетельство о&nbsp;регистрации &#8470; ФС77-81240 от&nbsp;30&nbsp;июня 2021&nbsp;г.</div>
            <div class="footer__social-date">2021 © мма.рф</div>
            <ul>
                <li><a href="/"><img data-src="img/footer/vk.svg" alt="" class="lazy"></a></li>
                <li><a href="/"><img data-src="img/footer/tb.svg" alt="" class="lazy"></a></li>
                <li><a href="/"><img data-src="img/footer/fb.svg" alt="" class="lazy"></a></li>
                <li><a href="/"><img data-src="img/footer/insta.svg" alt="" class="lazy"></a></li>
            </ul>
        </div>
</footer>