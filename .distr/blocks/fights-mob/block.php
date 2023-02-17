{% from './data.njk' import fightsMob as fightsMob %}
<section class="fights-mob {{ acco_class }}" id="fights-mob">
    <div class="container">
        <div class="fights-mob__title stats__body-title">Другие бои</div>
        <div class="fights-mob__box acco-item">
            <div class="fights-mob__poster {{ acco_content }}">
                {% for item in fightsMob %}
                <div class="fights-mob__item">
                    <div class="fights-mob__head">
                        <div class="fights-mob__head-title">{{item.title | safe}}</div>
                        <div class="fights-mob__head-date">{{item.date | safe}}</div>
                    </div>
                    <div class="fights-mob__body">
                        <div class="fights-mob__content fights-mob__content_left">
                            <div class="fights-mob__content-img" style="background-image: url('../img/articles/fights/{{item.idLeft | safe}}.png')">
                            </div>
                            <div>
                                <h4>{{item.nameLeft | safe}}</h4>
                                <span>{{item.countryLeft | safe}}</span>
                            </div>
                        </div>
                        <div class="fights-mob__vs">
                            <!-- <span>Полутяжёлый вес</span> -->
                            <img data-src="img/articles/fights/VS.png" alt="" class="lazy">
                        </div>
                        <div class="fights-mob__content fights-mob__content_right">
                            <div>
                                <h4>{{item.nameRight | safe}}</h4>
                                <span>{{item.countryRight | safe}}</span>
                            </div>
                            <div class="fights-mob__content-img" style="background-image: url('../img/articles/fights/{{item.idRight | safe}}.png')">
                            </div>
                        </div>
                    </div>  
                </div>
                {% endfor %}
            </div>
            <a href="/" class="fights-mob__button button">Показать ещё</a>
        </div>
    </div>
</section>
