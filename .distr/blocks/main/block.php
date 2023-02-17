{% from './data.njk' import data as event %}
<section class="main">
    <div class="container">
        <div class="main__search">
            <input type="search" placeholder="Поиск книг, авторов" name="search">
            <button type="submit">Найти</button>
        </div>
        <div class="main__banner"><img data-src="img/main/banner.jpg" alt="" class="lazy"></div>
        <div class="main__event event">
            <div class="event__head breadcrumbs">
                <h1 class="event__title title breadcrumbs__title">События<img data-src="img/common/icon.svg" alt="" class="lazy"></h1>
                <div class="event__tab breadcrumbs__tab all-tab">
                    <a class="event__tab-present breadcrumbs__tab-present active all-tab__item" href="/">Предстоящие</a>
                    <a class="event__tab-past breadcrumbs__tab-past all-tab__item" href="/">Прошедшие</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-inner">
        <div class="event__slider">
            {% for item in event %}
            <article class="event__item">
                <a class="event__wrap" href="/">
                    <img src="img/main/{{item.img | safe}}.jpg" alt="" class="event__img">
                    <div class="event__content">
                        <div class="event__content-date">{{item.date | safe}}</div>
                        <h3 class="event__content-title">{{item.title | safe}}</h3>
                    </div>
                </a>
            </article>
            {% endfor %}
        </div>
    </div>
</section>