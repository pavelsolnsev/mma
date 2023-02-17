{% from './data.njk' import news as news, video as video %}
<section class="articles" id="articles">
    <div class="container">
        <div class="articles__box">
            <div class="articles__blockleft">
                {% include 'fights/block.php' %}
                <div class="articles__img"><img data-src="img/articles/fights/banner.jpg" alt="" class="lazy"></div>
            </div>
            <div class="articles__blockright">
                <div class="articles__content">
                    {% include 'popular/block.php' %}
                    <div class="articles__news">
                        <h2 class="articles__news-title title">Новости<img data-src="img/common/icon.svg" alt="" class="lazy"></h2>
                        <article class="articles__news-main">
                            <a href="/">
                                <img data-src="img/articles/main.png" alt="" class="lazy">
                                <span>Сегодня</span>
                                <h3>Стерлинг против боя О&rsquo;Мэлли и&nbsp;Яна: &laquo;Я&nbsp;задолжал Петру
                                    колено!&raquo;</h3>
                            </a>
                        </article>
                        <div class="articles__news-wrap">
                            {% for item in news %}
                            <article class="news-block">
                                <a href="/">
                                    <img data-src="img/articles/article/{{item.img | safe}}.png" alt="" class="lazy">
                                    <div>
                                        <h3>{{item.subtitle | safe}}</h3>
                                        <span class="text">{{item.date | safe}}</span>
                                    </div>
                                </a>
                            </article>
                            {% endfor %}
                        </div>
                    </div>
                </div>

                <div class="articles__video">
                    <h2 class="articles__video-title">Новое видео</h2>
                    <div class="articles__video-slider">
                        {% for item in video %}
                        <a class="articles__video-item" href="/">
                            <div class="articles__video-img">
                                <img data-src="img/articles/video/{{item.img | safe}}.png" alt="" class="lazy">
                                <div class="video"><img data-src="img/articles/video/play.png" alt="" class="lazy"><span>00:00</span></div>
                            </div>
                            <h3>{{item.subtitle | safe}}</h3>
                        </a>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        <picture class="articles__banner_2">
            <source media="(max-width: 575px)" srcset="img/articles/banner-mob.jpg">
            <img data-src="img/articles/banner.jpg" alt="" class="lazy">
        </picture>
    </div>
</section>