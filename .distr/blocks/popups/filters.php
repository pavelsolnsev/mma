<!-- Главный попап !-->
<div class="popup popup--filter popup--filter-main" id="filter-main">
  <div class="popup__content">
    <!-- Если выбран фильтр для сортировки, то добавляем класс popup__content_top-filtered !-->
    <div class="popup__content_top popup__content_top-filtered">
      <div class="popup__content_row popup__content_row-1 popup__content_row-space">
        <div class="popup__head">
          <!-- Если не выбран фильтр для сортировки, то добавляем класс popup__border-bottom !-->
          <div class="popup__head_top">
            <div class="popup__head_back">
            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.375 8.25L0.625 4.5L4.375 0.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </div>
            <div class="popup__head_title">Фильтры</div>
            <div class="popup__head_cancel">
              <a href="#" class="popup__head_button">Отмена</a>
            </div>
          </div>
          <div class="popup__head_bottom">
          </div>
        </div>
      </div>
      <div class="popup__content_row popup__content_row-2">
        <div class="popup__enum">
          <div href="#filter-fights" class="popup__block popup__theme popup__border-bottom popup__border-bottom_2" data-fancybox data-touch="false" data-filter-fancybox>
            <div class="popup__box">
              <div class="popup__subtitle popup__theme_subtitle pointer-events">Вид единоборства</div>
              <div class="popup__img popup__theme_img pointer-events">все</div>
            </div>
          </div>
          <div href="#filter-format" class="popup__block popup__events popup__border-bottom popup__border-bottom_2" data-fancybox data-touch="false" data-filter-fancybox>
            <div class="popup__box">
              <div class="popup__subtitle popup__events_subtitle">Формат</div>
              <div class="popup__img popup__events_img pointer-events">все</div>
            </div>
          </div>
          <div href="#filter-country" class="popup__block popup__speakers popup__border-bottom popup__border-bottom_2" data-fancybox data-touch="false" data-filter-fancybox>
            <div class="popup__box">
              <div class="popup__subtitle popup__speakers_subtitle">Страна</div>
              <div class="popup__img popup__speakers_img pointer-events">все
                <!-- <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.77393 13.5L14.0643 9L8.77393 4.5" stroke="#6B7B8E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg> -->
              </div>
            </div>
          </div>
          <div href="#filter-floor" class="popup__block popup__date popup__border-bottom popup__border-bottom_2" data-fancybox data-touch="false" data-filter-fancybox>
            <div class="popup__box">
              <div class="popup__subtitle popup__date_subtitle">Пол</div>
              <div class="popup__img popup__date_img pointer-events">все</div>
            </div>
          </div>
          <div href="#filter-weight" class="popup__block popup__language popup__border-bottom popup__border-bottom_2" data-fancybox data-touch="false" data-filter-fancybox>
            <div class="popup__box">
              <div class="popup__subtitle popup__theme_subtitle pointer-events">Вес</div>
              <div class="popup__img popup__language_img pointer-events">все</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popup__content_bottom">
      <a href="#" class="popup__content_bottom_button">Показать 50 событий</a>
    </div>
  </div>
</div>


<!-- Попап с выбором боёв !-->
<div class="popup popup--filter popup--filter-theme popup--filter-selects" id="filter-fights">
  <div class="popup__content">
    <div class="popup__content_top">
      <div class="popup__head">
        <div class="popup__content_row popup__content_row-1">
          <div class="popup__head_top">
            <div class="popup__head_back">
            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.375 8.25L0.625 4.5L4.375 0.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </div>
            <div class="popup__head_title">Вид единоборства</div>
            <div class="popup__head_cancel">
              <a href="#" class="popup__head_button">Отмена</a>
            </div>
          </div>
          <div class="popup__head_bottom">
          </div>
        </div>
      </div>
      <div class="popup__content_row popup__content_row-2">
        <div class="popup__enum">
        </div>
      </div>
    </div>
    <div class="popup__content_bottom">
      <a href="#" class="popup__content_bottom_button">Показать 50 событий</a>
    </div>
  </div>
</div>

<!-- Попап с выбором формата !-->
<div class="popup popup--filter popup--filter-language popup--filter-selects" id="filter-format">
  <div class="popup__content">
    <div class="popup__content_top">
      <div class="popup__head">
        <div class="popup__content_row popup__content_row-1">
          <div class="popup__head_top">
            <div class="popup__head_back">
            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.375 8.25L0.625 4.5L4.375 0.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>


            </div>
            <div class="popup__head_title">Формат</div>
            <div class="popup__head_cancel">
              <a href="#" class="popup__head_button">Отмена</a>
            </div>
          </div>
        </div>
      </div>
      <div class="popup__content_row popup__content_row-2">
        <div class="popup__enum">
          <div class="popup__block popup__theme popup__border-bottom">
            <div class="popup__box">
              <div class="popup__subtitle popup__theme_subtitle pointer-events">Профессиональные</div>
              <div class="popup__filter_checkbox">
                <div class="popup__filter_checkbox-checked">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>
                <!-- <div class="popup__filter_checkbox-empty">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8333 2.5H4.16667C3.24619 2.5 2.5 3.24619 2.5 4.16667V15.8333C2.5 16.7538 3.24619 17.5 4.16667 17.5H15.8333C16.7538 17.5 17.5 16.7538 17.5 15.8333V4.16667C17.5 3.24619 16.7538 2.5 15.8333 2.5Z" stroke="#BCC7D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div> -->
              </div>
            </div>
          </div>
          <div class="popup__block popup__theme popup__border-bottom">
            <div class="popup__box">
              <div class="popup__subtitle popup__theme_subtitle pointer-events">Любительские</div>
              <div class="popup__filter_checkbox">
                <div class="popup__filter_checkbox-checked">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                </div>
                <!-- <div class="popup__filter_checkbox-empty">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8333 2.5H4.16667C3.24619 2.5 2.5 3.24619 2.5 4.16667V15.8333C2.5 16.7538 3.24619 17.5 4.16667 17.5H15.8333C16.7538 17.5 17.5 16.7538 17.5 15.8333V4.16667C17.5 3.24619 16.7538 2.5 15.8333 2.5Z" stroke="#BCC7D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popup__content_bottom">
      <a href="#" class="popup__content_bottom_button">Показать 50 событий</a>
    </div>
  </div>
</div>


<!-- Попап со странами !-->
<div class="popup popup--filter popup--filter-speakers popup--filter-selects" id="filter-country">
  <div class="popup__content">
    <div class="popup__content_top fixed-filter-head">
      <div class="popup__head">
        <div class="popup__content_row popup__content_row-1">
          <div class="popup__head_top">
            <div class="popup__head_back">
            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.375 8.25L0.625 4.5L4.375 0.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            </div>
            <div class="popup__head_title">Страна</div>
            <div class="popup__head_cancel">
              <a href="#" class="popup__head_button">Отмена</a>
            </div>
          </div>
          <div class="popup__head_bottom">
            <div class="popup__head_search">
              <label class="popup__head_search_label">
                <input type="text" class="popup__head_search_input" placeholder="Поиск по списку">
                <div class="popup__head_search_img">
                  <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.96383 12.8092C10.9093 12.8092 13.2972 10.4214 13.2972 7.47591C13.2972 4.53039 10.9093 2.14258 7.96383 2.14258C5.01831 2.14258 2.63049 4.53039 2.63049 7.47591C2.63049 10.4214 5.01831 12.8092 7.96383 12.8092Z" stroke="#6B7B8E" stroke-width="1.51186" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M14.6303 14.1424L11.7303 11.2424" stroke="#6B7B8E" stroke-width="1.51186" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="popup__head_search_clear">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="16" height="16" rx="8" fill="#6B7B8E" />
                    <path d="M11 5L5 11" stroke="#F6F6F8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 5L11 11" stroke="#F6F6F8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="popup__content_row popup__content_row-2">
        <div class="popup__enum">

        </div>
      </div>
    </div>
    <div class="popup__content_bottom">
      <a href="#" class="popup__content_bottom_button">Показать 50 событий</a>
    </div>
  </div>
</div>


<!-- Попап с выбором веса !-->
<div class="popup popup--filter popup--filter-events popup--filter-selects" id="filter-weight">
  <div class="popup__content">
    <div class="popup__content_top">
      <div class="popup__head">
        <div class="popup__content_row popup__content_row-1">
          <div class="popup__head_top">
            <div class="popup__head_back">
            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.375 8.25L0.625 4.5L4.375 0.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </div>
            <div class="popup__head_title">Вес</div>
            <div class="popup__head_cancel">
              <a href="#" class="popup__head_button">Отмена</a>
            </div>
          </div>
        </div>
      </div>
      <div class="popup__content_row popup__content_row-2">
        <div class="popup__enum">
        </div>
      </div>
    </div>
    <div class="popup__content_bottom">
      <a href="#" class="popup__content_bottom_button">Показать 50 событий</a>
    </div>
  </div>
</div>


<!-- Попап с датами !-->
<div class="popup popup--filter popup--filter-date popup--filter-selects" id="filter-floor">
  <div class="popup__content">
    <div class="popup__content_top">
      <div class="popup__head">
        <div class="popup__content_row popup__content_row-1">
          <div class="popup__head_top">
            <div class="popup__head_back">
            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.375 8.25L0.625 4.5L4.375 0.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            </div>
            <div class="popup__head_title">пол</div>
            <div class="popup__head_cancel">
              <a href="#" class="popup__head_button">Отмена</a>
            </div>
          </div>
        </div>
      </div>
      <div class="popup__content_row popup__content_row-2">
        <div class="popup__enum">
          <div class="popup__block popup__theme popup__border-bottom">
            <div class="popup__box">
              <div class="popup__subtitle popup__theme_subtitle pointer-events">Мужской</div>
              <div class="popup__filter_checkbox">
                <div class="popup__filter_checkbox-checked">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <!-- <div class="popup__filter_checkbox-empty">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8333 2.5H4.16667C3.24619 2.5 2.5 3.24619 2.5 4.16667V15.8333C2.5 16.7538 3.24619 17.5 4.16667 17.5H15.8333C16.7538 17.5 17.5 16.7538 17.5 15.8333V4.16667C17.5 3.24619 16.7538 2.5 15.8333 2.5Z" stroke="#BCC7D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div> -->
              </div>
            </div>
          </div>
          <div class="popup__block popup__theme popup__border-bottom">
            <div class="popup__box">
              <div class="popup__subtitle popup__theme_subtitle pointer-events">Женский</div>
              <div class="popup__filter_checkbox">
                <div class="popup__filter_checkbox-checked">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <!-- <div class="popup__filter_checkbox-empty">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8333 2.5H4.16667C3.24619 2.5 2.5 3.24619 2.5 4.16667V15.8333C2.5 16.7538 3.24619 17.5 4.16667 17.5H15.8333C16.7538 17.5 17.5 16.7538 17.5 15.8333V4.16667C17.5 3.24619 16.7538 2.5 15.8333 2.5Z" stroke="#BCC7D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popup__content_bottom">
      <a href="#" class="popup__content_bottom_button">Показать 50 событий</a>
    </div>
  </div>
</div>