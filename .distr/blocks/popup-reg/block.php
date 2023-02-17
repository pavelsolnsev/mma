<section class="popup-reg" id="popup-reg" style="display: none;">
    <div class="popup-reg__overlay"></div>
    <div class="popup-reg__box">
        <div class="popup-reg__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Доступ к событию</h3>
                <div class="form__text">Хочешь посмотреть, оставь свои контакты</div>
                <div class="form__items">
                    <div class="form__item form__item_email ">
                        <span>Введите имя</span>
                        <input type="text" name="name" placeholder="" class="form__input" required="" value="">
                    </div><!-- form__item -->
                    <div class="form__item form__item_email ">
                        <span>Введите email</span>
                        <input name="email" type="email" placeholder="" class="form__input" required="" value="">
                    </div><!-- form__item -->
                    <div class="form__item form__item_email ">
                        <span>Введите телефон</span>
                        <input type="tel" name="phone" placeholder="" class="form__input" required="" value="">
                    </div><!-- form__item -->
                    <button class="form__button button" type="submit">Отправить</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="popup-user" id="popup-user" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Регистрация пользователя</h3>
                <div class="form__text">Заполните все поля, и&nbsp;введите код из&nbsp;смс, отправленный на&nbsp;<nobr class="popup-user__phone">+7 000 000-00-00</nobr>
                </div>
                <div class="form__items">
                    <div class="form__item form__select select">
                        <span>Выберите роль</span>
                        <select data-placeholder="Спортсмен" class="catalog__select">
                            <option value=""></option>
                            <option value="Второй фильтр">Спортсмен</option>
                            <option value="Третий фильтр">Фанат</option>
                            <option value="Четвертый фильтр">Официальное лицо</option>
                        </select>
                    </div>
                    <div class="form__item">
                        <span>Введите имя</span>
                        <input type="text" name="name" placeholder="" class="form__input" required="" value="">
                    </div><!-- form__item -->
                    <div class="form__item form__item_email ">
                        <span>Введите телефон</span>
                        <input type="tel" name="phone" placeholder="" class="form__input" required="" value="">
                    </div><!-- form__item -->
                    <div class="form__item">
                        <span>Код из смс</span>
                        <div class="form__wrap">
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                        </div>
                    </div><!-- form__item -->
                    <button class="form__button button" type="submit">Зарегистрироваться</button>
                    <div class="form__code button">Отправить код повторно <span>00:26</span></div>
                    <button class="form__number button" type="submit">Изменить номер</button>
                    <div class="form__more">
                        <label class="form__footer {{ form__footer_class }}">
                            <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                                <div class="form__footer-checkbox-icon lazy"></div>
                            </div>
                            <div class="form__footer-text">согласен на обработку персональных данных, полученние рассылок, а также с <a href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru" data-fancybox="" class="fancybox-privacy-link">политикой конфиденциальности</a></div>
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<section class="popup-user popup-log" id="popup-log" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Вход или регистрация</h3>
            </div>
            <div class="form__items">
                <div class="form__item form__item_email ">
                    <span>Введите номер телефона</span>
                    <input type="tel" name="phone" placeholder="" class="form__input" required="" value="">
                </div><!-- form__item -->
                <button class="form__button button" type="submit">Получить код</button>
                <span class="form__txt">или</span>
                <button class="form__button form__button-blue button" type="submit">Зарегистрироваться</button>
            </div>
        </form>
    </div>
</section>


<section class="popup-user popup-sms" id="popup-sms" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Введите код из смс</h3>
                <div class="form__text">Мы отправили его на <nobr class="popup-user__phone">+7 000 000-00-00</nobr>
                </div>
                <div class="form__items">
                    <div class="form__item">
                        <span>Код из смс</span>
                        <div class="form__wrap">
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                        </div>
                    </div><!-- form__item -->
                    <button class="form__button button" type="submit">Войти</button>
                    <div class="form__code button">Отправить код повторно <span>00:26</span></div>
                    <button class="form__number button" type="submit">Войти с другим номером</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="popup-user popup-verification" id="popup-verification" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Пройдите верификацию</h3>
                <div class="form__items">
                    <button class="form__button button" type="submit">Пройти верификацию</button>
                    <button class="form__skip button" type="submit">Пропустить</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="popup-user popup-faq" id="popup-faq" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">

        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Задайте вопрос</h3>
                <div class="form__items">
                    <div class="form__item form__item_email ">
                        <span>Введите свой вопрос</span>
                        <textarea class="form__textarea" name="textarea" type="textarea" placeholder="" value="" id=""></textarea>
                    </div><!-- form__item -->
                    <button class="form__button button" type="submit">Отправить</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="popup-user popup-success" id="popup-success" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Поздравляем!<br> Вы&nbsp;успешно зарегистрировались</h3>
                <div class="form__items">
                    <button class="form__button button" type="submit">Продолжить</button>
                    <button class="form__skip button" type="submit">Пропустить</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="popup-user popup-error" id="popup-error" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Неверный код</h3>
                <div class="form__text">Пожалуйста, введите код,<br> который&nbsp;Вы только что получили</div>
                <div class="form__items">
                    <div class="form__item">
                        <span>Код из смс</span>
                        <div class="form__wrap">
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                            <label class="form__box"><input class="form__field" type="number" placeholder=""></label>
                        </div>
                    </div><!-- form__item -->
                    <button class="form__button button" type="submit">Войти</button>
                    <div class="form__code button">Отправить код повторно <span>00:26</span></div>
                    <button class="form__number button" type="submit">Войти с другим номером</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="popup-user popup-error popup-password" id="popup-password" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Учетная запись<br> успешно создана</h3>
                <div class="form__text">Ваш логин <strong>ivanivanov@ya.ru</strong><br> Введите пароль для завершения регистрации</div>
                <div class="form__items">
                    <div class="form__item form__item_password ">
                        <span>Ваш пароль</span>
                        <div>
                            <input type="password" id="password" name="text" placeholder="" class="form__input" required="" value="password">
                            <img src="img/popup-reg/show.svg" alt="" class="form__password">
                        </div>
                    </div><!-- form__item -->
                    <div class="form__item form__item_password ">
                        <span>Подтвердите пароль</span>
                        <div>
                            <input type="password" id="password" name="text" placeholder="" class="form__input" required="" value="password">
                            <img src="img/popup-reg/show.svg" alt="" class="form__password">
                        </div>
                    </div><!-- form__item -->
                    <button class="form__button button" type="submit">Завершить регистрацию</button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="popup-application" id="popup-application">
    <div class="popup-application__box">
        <h2 class="popup-application__title title">Заявка на соревнование</h2>
        <div class="popup-application__subtitle">К заявке прилагаются следующие документы на каждого спортсмена:</div>
        <ol class="popup-application__list">
            <li class="popup-application__item">Паспорт гражданина Российской Федерации;</li>
            <li class="popup-application__item">Зачетная классификационная книжка;</li>
            <li class="popup-application__item">Справка на&nbsp;ВИЧ и&nbsp;вирус гепатита&nbsp;В и&nbsp;С (оригиналы, выданные медицинским учреждением не&nbsp;более чем за&nbsp;6&nbsp;месяца до&nbsp;дня проведения соревнований);</li>
            <a href="" class="button popup-application__down">Загрузить документ</a>
            <li class="popup-application__item">Справка о&nbsp;налиции отрицательного результата лабораторного исследования на&nbsp;COVID-19 методом ПЦР, выданная не&nbsp;ранее 3-х календарных дней до&nbsp;начала мероприятия.<strong>Данная справка необходима не&nbsp;только спортсменам, но&nbsp;и&nbsp;тренерам, руководителям команд, спортивным судьям и&nbsp;всему персоналу спротивного соревнования (или сертификат о&nbsp;пройденной вакцинации с&nbsp;интернет-портала Госуслуги).</strong></li>
            <li class="popup-application__item">Полис обязательного медицицнского страхования и&nbsp;полис страхования жизни и&nbsp;здоровья от&nbsp;несчастных случаев (оригинал);</li>
            <li class="popup-application__item">Документ (квитанция), подстверждающих оплату взноса спортсмена на&nbsp;реквизиты ООО &laquo;Союз ММА России&raquo; (500&nbsp;руб.) за&nbsp;участие в&nbsp;соревнованиях ООО &laquo;Союз ММА России&raquo; на&nbsp;2021&nbsp;год;</li>
            <a href="" class="button popup-application__down">Загрузить документ</a>
            <li class="popup-application__item">Заполненная карточка участника и&nbsp;расписка спортсмена об&nbsp;ознакомлении с&nbsp;Положением, правилам проведения соревнований (Приложение &#8470;&nbsp;3);</li>
        </ol>
        <label class="form__footer">
            <div class="form__footer-checkbox"><input type="checkbox" name="" checked="" wfd-invisible="true">
                <div class="form__footer-checkbox-icon lazy-loaded"></div>
            </div>
            <div class="form__footer-text">Согласие на обработку <a href="">персональных данных</a></div>
        </label>
        <div class="popup-application__subtitle">При отсутствии одного из&nbsp;перепчисленных документов спортсмен к&nbsp;участию в&nbsp;соревнованиях не&nbsp;допускается.</div>
    </div>
    <div class="popup-application__block">
        <div class="popup-application__select select">
            <span>Выберите пол</span>
            <select data-placeholder="Спортсмен" class="catalog__select">
                <option value=""></option>
                <option value="Второй фильтр">Спортсмен</option>
                <option value="Третий фильтр">Фанат</option>
                <option value="Четвертый фильтр">Официальное лицо</option>
            </select>
        </div>
        <div class="popup-application__select select">
            <span>Выберите вес</span>
            <select data-placeholder="Спортсмен" class="catalog__select">
                <option value=""></option>
                <option value="Второй фильтр">Спортсмен</option>
                <option value="Третий фильтр">Фанат</option>
                <option value="Четвертый фильтр">Официальное лицо</option>
            </select>
        </div>
    </div>

    <div class="popup-application__button">
        <button class="popup-application__button-send button">Отправить</button>
        <button class="popup-application__button-canсel button">Отменить</button>
    </div>
</section>

<section class="popup-user popup-success-2" id="popup-success-2" style="display: none;">
    <div class="popup-user__overlay"></div>
    <div class="popup-user__box">
        <div class="popup-user__logo">
            <img data-src="img/header/logo.svg" alt="" class="lazy">
        </div>
        <form action="#" class="form">
            <div class="form__wrapper">
                <h3 class="form__title">Поздравляем!<br>Ваша заявка принята</h3>
                <p class="form__text">Как только ваши документы пройдут проверку, мы&nbsp;с&nbsp;вами свяжемся. Не&nbsp;забывайте взять оригиналы на&nbsp;мандатную комиссию.</p>
                <div class="form__items">
                    <a href="" class="form__button button">Ок</a>
                </div>
            </div>
        </form>
    </div>
</section>