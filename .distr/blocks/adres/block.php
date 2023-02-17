<section class="adres {{ acco_class }}" id="adres">
    <div class="container acco-item">
        {% if acco %}
        <div class="bg-position bg-title acco-trigger">
            <h2 class="adres__title title">Адрес<img data-src="img/main-page-now/theme.svg" alt="" class="lazy"></h2>
        </div>
        {% else %}
        <h2 class="adres__title title">Адрес</h2>
        {% endif %}
        <div class="adres__box {{ acco_content }}">
            <div class="adres__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5c23c1e16f19867444197371f76cf73d67f57f10cf03b8abd77510bb825c0b14&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
            <ul class="adres__list row">
                <div class="col-4 col-sm-6">
                    <li>Адрес</li>
                </div>
                <div class="col-8 col-sm-6">
                    <li>г. Гатчина, ул. Горького, д.21.</li>
                </div>
                <div class="col-4 col-sm-6">
                    <li>Организатор</li>
                </div>
                <div class="col-8 col-sm-6">
                    <li>Федерация MMA г. Комсомольск-на-Амуре</li>
                </div>
                <div class="col-4 col-sm-6">
                    <li>Телефон</li>
                </div>
                <div class="col-8 col-sm-6">
                    <li>+7 (000) 000-00-00</li>
                </div>
            </ul>
        </div>
    </div>
</section>