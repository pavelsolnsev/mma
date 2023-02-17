{% from './data.njk' import popular as popular %}
<div class="popular" id="popular">
    <h2 class="popular-title title">Популярное<img data-src="img/common/icon.svg" alt="" class="lazy"></h2>
    {% for item in popular %}
    <a href="/" class="popular-item">
        <h3>{{item.subtitle | safe}}</h3>
        <span class="text">{{item.date | safe}}</span>
    </a>
    {% endfor %}
    <a href="/" class="popular-button button">Больше материалов</a>
</div>