<section class="account" id="account">
    <div class="container">
        <div class="account__breadcrumbs breadcrumbs_2"><img data-src="img/main-page/arrow.svg" alt="" class="lazy">К турниру</div>
        <h1 class="account__title title">Личные данные</h1>
        <div class="account__wrapper">
            <div class="account__photo">
                <a href="" class="account__photo-img">
                    <div>
                        <img data-src="img/account/photo.svg" alt="" class="lazy">
                        <span>Добавить фото </span>
                    </div>
                </a>
                <div class="account__photo-button">
                    <a href="" class="button account__photo-button_delete">Удалить</a>
                    <a href="" class="button account__photo-button_change">Изменить</a>
                </div>
                <div class="account__photo-switch">
                    <div>
                        <span>Переключиться<br> на&nbsp;аккаунт фаната</span>
                        <label class="switch">
                            <input type="checkbox">
                            <div></div>
                        </label>
                    </div>
                    <div>
                        <span>Переключиться на&nbsp;аккаунт<br> официального лица</span>
                        <label class="switch">
                            <input type="checkbox">
                            <div></div>
                        </label>
                    </div>
                </div>
            </div>
            <form action="" class="form">

                <div class="form__wrapper">
                    <!-- <h3 class="form__title">Доступ к событию</h3> -->
                    <div class="form__items">
                        <div class="form__item">
                            <span>Имя</span>
                            <input type="text" name="name" placeholder="Сирил" class="form__input" required="" value="">
                        </div><!-- form__item -->
                        <div class="form__item">
                            <span>Фамилия</span>
                            <input type="text" name="lastName" placeholder="Ган" class="form__input" required="" value="">
                        </div><!-- form__item -->
                    </div>


                    <div class="form__items form__items-two">
                        <div class="form__items-two_year">
                            <span>Дата рождения:</span>
                            <div>
                                <input type="text" name="text" placeholder="20" class="form__input" required="" value="">
                                <div class="form__select select">
                                    <select data-placeholder="Апрель" class="catalog__select">
                                        <option value=""></option>
                                        <option value="Второй фильтр">Второй фильтр</option>
                                        <option value="Третий фильтр">Третий фильтр</option>
                                        <option value="Четвертый фильтр">Четвертый фильтр</option>
                                    </select>
                                </div>
                                <input type="text" name="text" placeholder="1990" class="form__input" required="" value="">
                            </div>
                        </div>
                        <div class="form__items-two_floor all-tab">
                            <span>Пол:</span>
                            <div>
                                <a class="form__tab-man active all-tab__item" href="/">Мужской</a>
                                <a class="form__tab-woman all-tab__item" href="/">Женский</a>
                            </div>
                        </div>
                    </div>


                    <div class="form__items">
                        <div class="form__item">
                            <span>Страна</span>
                            <div class="form__select select">
                                <select data-placeholder="Франция" class="catalog__select">
                                    <option value=""></option>
                                    <option value="Второй фильтр">Второй фильтр</option>
                                    <option value="Третий фильтр">Третий фильтр</option>
                                    <option value="Четвертый фильтр">Четвертый фильтр</option>
                                </select>
                            </div>
                        </div><!-- form__item -->
                    </div>
                    <label class="form__footer ">
                        <div class="form__footer-checkbox"><input type="checkbox" name="" checked="" wfd-invisible="true">
                            <div class="form__footer-checkbox-icon lazy-loaded"></div>
                        </div>
                        <div class="form__footer-text">показывать всем</div>
                        <!-- <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> -->
                    </label>

                    <div class="form__button">
                        <a href="" class="form__button-save button">Сохранить</a>
                        <a href="" class="form__button-none button">Отменить</a>
                    </div>

                </div>

                <div class="form__wrapper">
                    <h3 class="form__title">О себе</h3>

                    <textarea class="form__textarea" name="textarea" type="textarea" placeholder="" value="" id=""></textarea>

                    <div class="form__button">
                        <a href="" class="form__button-save button">Сохранить</a>
                        <a href="" class="form__button-none button">Отменить</a>
                    </div>
                </div>
            </form>
        </div>
        <picture class="banner-post">
            <source media="(max-width: 575px)" srcset="img/profile/banner-mob.jpg">
            <img alt="" class="lazy-loaded" src="img/profile/banner.jpg">
        </picture>

    </div>
</section>