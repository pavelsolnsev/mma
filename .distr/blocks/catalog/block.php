{% from './data.njk' import data as catalog %}
<section class="catalog" id="catalog">
    <div class="container">
        <div class="catalog__box">
            {% for item in catalog %}
            <div class="catalog__col">
                <a href="/" class="catalog__item">
                    <div class="catalog__img">
                        <img data-src="img/catalog/{{item.img | safe}}.png" alt="" class="lazy">
                        <span>{{item.date | safe}}</span>
                    </div>
                    <div class="catalog__content">
                        <div class="catalog__content-title">{{item.title | safe}}</div>
                        <div class="catalog__content-subtitle">{{item.subtitle | safe}}</div>
                    </div>
                </a>
            </div>
            {% endfor %}
        </div>
        <a href="/" class="catalog__button button more-button">Показать ещё <img data-src="img/common/more.svg" alt="" class="lazy"></a>
        <picture>
            <source media="(max-width: 575px)" srcset="img/catalog/banner-mob.jpg">
            <img data-src="img/catalog/banner.jpg" alt="" class="lazy catalog__banner">
        </picture>
    </div>
</section>