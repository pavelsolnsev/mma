{% from './data.njk' import data as rating %}
<section class="rating" id="rating">
    <div class="container-inner">
        <h2 class="rating__title title">Рейтинги бойцов<img data-src="img/common/icon-w.svg" alt="" class="lazy"></h2>
        <div class="rating__slider">
            {% for item in rating %}
            <div class="rating__item">
                <a href="" class="rating__wrap">
                    <div class="rating__card">
                        <img src="img/rating/{{item.img | safe}}.png" alt="" class="rating__card-img">
                        <img src="img/rating/{{item.number | safe}}.png" alt="" class="rating__card-number">
                    </div>
                    <div class="rating__content">
                        <div class="rating__content-title">{{item.title | safe}}</div>
                        <div class="rating__content-weight">{{item.weight | safe}}</div>
                    </div>
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</section>