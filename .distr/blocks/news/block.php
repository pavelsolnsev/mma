<section class="news {{ acco_class }} {{ post_class }}" id="news">
    <div class="container acco-item">
        {% if acco %}
        <div class="bg-position bg-title acco-trigger">
            <h2 class="news__title title">Новости<img data-src="img/main-page-now/theme.svg" alt="" class="lazy"></h2>
        </div>
        {% elif post_news %}
        <h2 class="news__title title">Лента постов<img data-src="img/common/icon.svg" alt="" class="lazy"></h2>
        {% else %}
        <h2 class="news__title title">Новости</h2>
        {% endif %}
        <div class="row news__box {{ acco_content }}">
            <div class="col-sm-6 news__col">
                <article class="news-block">
                    <a href="/">
                        <img data-src="img/articles/article/article-1.png" alt="" class="lazy">
                        <div>
                            <h3>Вячеслав Василевский и&nbsp;Вискарди Андраде проведут бой 3&nbsp;мая</h3>
                            <span class="text">Сегодня</span>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-sm-6 news__col">
                <article class="news-block">
                    <a href="/">
                        <img data-src="img/articles/article/article-1.png" alt="" class="lazy">
                        <div>
                            <h3>Вячеслав Василевский и&nbsp;Вискарди Андраде проведут бой 3&nbsp;мая</h3>
                            <span class="text">Сегодня</span>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-sm-6 news__col">
                <article class="news-block">
                    <a href="/">
                        <img data-src="img/articles/article/article-1.png" alt="" class="lazy">
                        <div>
                            <h3>Вячеслав Василевский и&nbsp;Вискарди Андраде проведут бой 3&nbsp;мая</h3>
                            <span class="text">Сегодня</span>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-sm-6 news__col">
                <article class="news-block">
                    <a href="/">
                        <img data-src="img/articles/article/article-1.png" alt="" class="lazy">
                        <div>
                            <h3>Вячеслав Василевский и&nbsp;Вискарди Андраде проведут бой 3&nbsp;мая</h3>
                            <span class="text">Сегодня</span>
                        </div>
                    </a>
                </article>
            </div>
        </div>
        {% if post_news %}
        <picture class="banner-post">
            <source media="(max-width: 575px)" srcset="img/profile/banner-mob.jpg">
            <img alt="" class="lazy-loaded" src="img/profile/banner.jpg">
        </picture>
        {% endif %}
    </div>
</section>