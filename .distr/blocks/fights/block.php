{% from './data.njk' import fights as fights %}
<section class="fights {{ acco_class }}" id="fights">
    <div class="container">
        <div class="fights__box acco-item">
        {% if eventsPageNow or eventsPage %}
            {% if acco %}
            <div class="bg-position bg-title acco-trigger">
                <h2 class="program__title title">Бои<img data-src="img/main-page-now/theme.svg" alt="" class="lazy"></h2>
            </div>
            {% else %}
            <h2 class="fights__title title">Бои</h2>
            {% endif %}
            <ul class="fights__tabs all-tab">
                <li><a class="all-tab__item" href="/">Основной кард</a></li>
                <li><a class="all-tab__item" href="/">Прелимы</a></li>
                <li><a class="all-tab__item" href="/">Ранние прелимы</a></li>
            </ul>
        {% else %}
            <div class="fights__breadcrumbs breadcrumbs">
                <h2 class="fights__title title breadcrumbs__title">Бои<img data-src="img/common/icon.svg" alt="" class="lazy"></h2>
                <div class="fights__tab breadcrumbs__tab all-tab">
                    <a class="fights__tab-present breadcrumbs__tab-present active all-tab__item" href="/">Предстоящие</a>
                    <a class="fights__tab-past breadcrumbs__tab-past all-tab__item" href="/">Прошедшие</a>
                </div>
            </div>
        {% endif %}
            <div class="fights__poster {{ acco_content }}">
                {% for item in fights %}
                <div class="fights__item">
                    <div class="fights__head">
                        <div class="fights__head-title">{{item.title | safe}}</div>
                        <div class="fights__head-date">{{item.date | safe}}</div>
                    </div>
                    <div class="fights__body">
                        <div class="fights__content fights__content_left">
                            <div class="fights__content-img" style="background-image: url('../img/articles/fights/{{item.idLeft | safe}}.png')">
                            </div>
                            <div>
                                <h4>{{item.nameLeft | safe}}</h4>
                                <span>{{item.countryLeft | safe}}</span>
                            </div>
                        </div>
                        <div class="fights__vs">
                            <span>Полутяжёлый вес</span>
                            <img data-src="img/articles/fights/VS.png" alt="" class="lazy">
                        </div>
                        <div class="fights__content fights__content_right">
                            <div>
                                <h4>{{item.nameRight | safe}}</h4>
                                <span>{{item.countryRight | safe}}</span>
                            </div>
                            <div class="fights__content-img" style="background-image: url('../img/articles/fights/{{item.idRight | safe}}.png')">
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
                <a href="/" class="fights__button button">Показать ещё</a>
            </div>
        </div>
    </div>
</section>