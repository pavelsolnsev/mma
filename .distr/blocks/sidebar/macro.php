{% macro video_list() %}
<div class="sidebar__left">
  <div class="sidebar__left_desktop">
    <div class="sidebar__inner">
      <div class="sidebar__title sidebar__title_themes">Вид единоборства</div>
      <div class="sidebar__filter sidebar__filter_themes">
        <div class="sidebar__box">
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Бокс</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Бокс</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Бокс</span>
          </a>
        </div>
      </div>
    </div>

    <div class="sidebar__inner">
      <div class="sidebar__title sidebar__title_sorted sidebar__title_sorted-desktop">Формат</div>
      <a class="sidebar__title sidebar__title_sorted-mobile" href="#filter-sort" data-fancybox data-touch="false">Сначала новые</a>

      <div class="sidebar__filter sidebar__filter_sorted">
        <div class="sidebar__box">
          <!-- <a class="sidebar__item active">
            <span class="sidebar__item-inner">Сначала новые</span>
            <div class="sidebar__item-check">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.3332 4L5.99984 11.3333L2.6665 8" stroke="#4D2CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </div>
          </a> -->
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Профессиональный</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Любительский</span>
          </a>
        </div>
      </div>
    </div>

    <div class="sidebar__inner">
      <!-- Заполняется из JSON !-->
      <div class="sidebar__title sidebar__title_speakers">Страна</div>
      <div class="sidebar__filter sidebar__filter_speakers">
        <div class="sidebar__box">
          <div class="sidebar__box_search">
            <label class="sidebar__box_search_label">
              <input type="text" class="sidebar__box_search_input" placeholder="Поиск" id="speakers-filter">
              <!-- <div class="sidebar__box_search_img">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.96383 12.8092C10.9093 12.8092 13.2972 10.4214 13.2972 7.47591C13.2972 4.53039 10.9093 2.14258 7.96383 2.14258C5.01831 2.14258 2.63049 4.53039 2.63049 7.47591C2.63049 10.4214 5.01831 12.8092 7.96383 12.8092Z" stroke="#6B7B8E" stroke-width="1.51186" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M14.6303 14.1424L11.7303 11.2424" stroke="#6B7B8E" stroke-width="1.51186" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div> -->
            </label>
          </div>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Австралия</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Австралия</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Австралия</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Австралия</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Австралия</span>
          </a>
        </div>
         <input type="button" value="Применить" class="sidebar__box_button">
      </div>
    </div>

    <div class="sidebar__inner">
      <div class="sidebar__title sidebar__title_format">Пол</div>

      <div class="sidebar__filter sidebar__filter_format">
        <div class="sidebar__box">
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Мужской</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Женский</span>
          </a>
        </div>
      </div>
    </div>

    <div class="sidebar__inner">
      <div class="sidebar__title sidebar__title_format">Вес</div>

      <div class="sidebar__filter sidebar__filter_format">
        <div class="sidebar__box">
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Легкий</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Средний</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Тяжелый</span>
          </a>
        </div>
      </div>
    </div>

  </div>
  <div class="sidebar__left_mobile">
    <div href="#filter-main" class="sidebar__sort" data-fancybox data-touch="false" data-filter-fancybox>
    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15 2.5L6.5 2.5M6.5 2.5C6.5 1.39543 5.60457 0.5 4.5 0.5C3.39543 0.5 2.5 1.39543 2.5 2.5M6.5 2.5C6.5 3.60457 5.60457 4.5 4.5 4.5C3.39543 4.5 2.5 3.60457 2.5 2.5M2.5 2.5L0 2.5M15 10.5L12.5 10.5M12.5 10.5C12.5 9.39543 11.6046 8.5 10.5 8.5C9.39543 8.5 8.5 9.39543 8.5 10.5M12.5 10.5C12.5 11.6046 11.6046 12.5 10.5 12.5C9.39543 12.5 8.5 11.6046 8.5 10.5M8.5 10.5H1.27146e-07" stroke="#E8E9EC"/>
    </svg>
      <div class="sidebar__sort_text">Фильтры</div>
    </div>
  </div>
</div>


<div class="sidebar__right">

  <div class="sidebar__tab all-tab">
    <a class="sidebar__tab-present active all-tab__item" href="/">Предстоящие</a>
    <a class="sidebar__tab-past all-tab__item" href="/">Прошедшие</a>
  </div>


</div>


<div class="sidebar__bottom">
  <div class="sidebar__bottom_content">
  </div>
</div>
{% endmacro %}



{% macro video_list2() %}
<div class="sidebar__left">
  <div class="sidebar__left_desktop">
    <div class="sidebar__inner">
      <div class="sidebar__title sidebar__title_themes">По дате</div>
      <div class="sidebar__filter sidebar__filter_themes">
        <div class="sidebar__box">
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Бокс</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
        </div>
      </div>
    </div>
    <div class="sidebar__inner">
      <div class="sidebar__title sidebar__title_themes">По рейтингу</div>
      <div class="sidebar__filter sidebar__filter_themes">
        <div class="sidebar__box">
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Бокс</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
        </div>
      </div>
    </div>
    <div class="sidebar__inner">
      <div class="sidebar__title sidebar__title_themes">По алфавиту</div>
      <div class="sidebar__filter sidebar__filter_themes">
        <div class="sidebar__box">
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Бокс</span>
          </a>
          <a class="sidebar__item">
            <span class="sidebar__item-inner">Кикбоксинг</span>
          </a>
        </div>
      </div>
    </div>

  </div>
  <div class="sidebar__left_mobile">
    <div href="#filter-main" class="sidebar__sort" data-fancybox data-touch="false" data-filter-fancybox>
    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M15 2.5L6.5 2.5M6.5 2.5C6.5 1.39543 5.60457 0.5 4.5 0.5C3.39543 0.5 2.5 1.39543 2.5 2.5M6.5 2.5C6.5 3.60457 5.60457 4.5 4.5 4.5C3.39543 4.5 2.5 3.60457 2.5 2.5M2.5 2.5L0 2.5M15 10.5L12.5 10.5M12.5 10.5C12.5 9.39543 11.6046 8.5 10.5 8.5C9.39543 8.5 8.5 9.39543 8.5 10.5M12.5 10.5C12.5 11.6046 11.6046 12.5 10.5 12.5C9.39543 12.5 8.5 11.6046 8.5 10.5M8.5 10.5H1.27146e-07" stroke="#E8E9EC"/>
    </svg>
      <div class="sidebar__sort_text">Фильтры</div>
    </div>
  </div>
</div>


<div class="sidebar__right">

  <div class="sidebar__tab all-tab">
    <a class="sidebar__tab-present active all-tab__item" href="/">Фото</a>
    <a class="sidebar__tab-past all-tab__item" href="/">Видео</a>
  </div>


</div>


<div class="sidebar__bottom">
  <div class="sidebar__bottom_content">
  </div>
</div>
{% endmacro %}



{% macro speakers_list() %}
<div class="sidebar__inner">
  <div class="sidebar__title sidebar__title_themes">Темы</div>
  <div class="sidebar__filter sidebar__filter_themes">
    <a class="sidebar__item ">
      <span class="sidebar__item-inner">Все темы</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">GR-менеджмент</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">PR и реклама</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Бизнес и предпринимательство</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Информационные технологии</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Исскуство</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Лидерство</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Маркетинг</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Менеджмент</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Мотивация</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Стартап</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">Экономика</span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">Менеджмент</span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">Мотивация</span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">Стартап</span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">Экономика</span>
    </a>
    <div class="sidebar__more">
      <span class="sidebar__item-inner">Показать все</span>
    </div>
  </div>
</div>
<div class="sidebar__inner">
  <div class="sidebar__title sidebar__title_events">События</div>
  <div class="sidebar__filter sidebar__filter_events">
    <a class="sidebar__item ">
      <span class="sidebar__item-inner">Все события</span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#E70C6A" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#E70C6A" />
        </svg>
        <span class="sidebar__item-name">ONLINE FORUM</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#6759AC" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#6759AC" />
        </svg>
        <span class="sidebar__item-name">DIGITAL FORUM</span>
        <span class="sidebar__item-year">2020</span>
      </span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#6759AC" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#6759AC" />
        </svg>
        <span class="sidebar__item-name">DIGITAL FORUM</span>
        <span class="sidebar__item-year"> 2019</span>
      </span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#0082BC" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#0082BC" />
        </svg>
        <span class="sidebar__item-name">WOMAN FORUM</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#0082BC" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#0082BC" />
        </svg>
        <span class="sidebar__item-name">WOMAN FORUM</span>
        <span class="sidebar__item-year"> 2019</span>
      </span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#FF0000" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#FF0000" />
        </svg>
        <span class="sidebar__item-name">SALES FORUM</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="url(#paint0_linear)" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="url(#paint1_linear)" />
          <defs>
            <linearGradient id="paint0_linear" x1="12" y1="0" x2="12" y2="24" gradientUnits="userSpaceOnUse">
              <stop stop-color="#E70C6A" />
              <stop offset="0.51331" stop-color="#6C0BCC" />
              <stop offset="1" stop-color="#2CA4E8" />
            </linearGradient>
            <linearGradient id="paint1_linear" x1="10.6676" y1="4.2955" x2="10.6676" y2="19.6868" gradientUnits="userSpaceOnUse">
              <stop stop-color="#E70C6A" />
              <stop offset="0.51331" stop-color="#6C0BCC" />
              <stop offset="1" stop-color="#2CA4E8" />
            </linearGradient>
          </defs>
        </svg>
        <span class="sidebar__item-name">ART RUSSIA</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <a class="sidebar__item">
      <span class="sidebar__item-inner">
        <span class="sidebar__item-name">Туризм</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#0082BC" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#0082BC" />
        </svg>
        <span class="sidebar__item-name">WOMAN FORUM</span>
        <span class="sidebar__item-year"> 2019</span>
      </span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="#FF0000" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="#FF0000" />
        </svg>
        <span class="sidebar__item-name">SALES FORUM</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0V24H24V0H0ZM3.71739 20.2826V3.71739H20.2826V20.2826H3.71739Z" fill="url(#paint0_linear)" />
          <path d="M14.5062 19.6868V14.4321L12.0745 12.0005L14.5155 9.55016V4.2955L6.81982 12.0005L14.5062 19.6868Z" fill="url(#paint1_linear)" />
          <defs>
            <linearGradient id="paint0_linear" x1="12" y1="0" x2="12" y2="24" gradientUnits="userSpaceOnUse">
              <stop stop-color="#E70C6A" />
              <stop offset="0.51331" stop-color="#6C0BCC" />
              <stop offset="1" stop-color="#2CA4E8" />
            </linearGradient>
            <linearGradient id="paint1_linear" x1="10.6676" y1="4.2955" x2="10.6676" y2="19.6868" gradientUnits="userSpaceOnUse">
              <stop stop-color="#E70C6A" />
              <stop offset="0.51331" stop-color="#6C0BCC" />
              <stop offset="1" stop-color="#2CA4E8" />
            </linearGradient>
          </defs>
        </svg>
        <span class="sidebar__item-name">ART RUSSIA</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <a class="sidebar__item sidebar__item_none">
      <span class="sidebar__item-inner">
        <span class="sidebar__item-name">Туризм</span>
        <span class="sidebar__item-year"> 2020</span>
      </span>
    </a>
    <div class="sidebar__more">Показать все</div>
  </div>
</div>
{% endmacro %}