{% if section1 %}
<section class="form-reg form-reg_hidden">
    <div class="container">
        {{ form.form( 'form_1') }}
    </div>
</section>
{% elif section2 %}
<section class="form-reg form-reg_hidden">
    <div class="container">
        {{ form.form( 'form_2', title='Оставьте заявку и&nbsp;получите консультацию, как поступить в&nbsp;МОИ') }}
    </div>
</section>
{% elif section3 %}
<section class="form-reg">
    <div class="container">
        {{ form.form( 'form_3') }}
    </div>
</section>
{% endif %}



