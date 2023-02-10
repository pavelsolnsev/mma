$(function () {
  /* Inits */
  initLazy();
  initScroll();
  initTabs();
  initVideo();
  openProgram();
  openReview();
  initNumberField();
  initTournament();
  /* Lazy */
  function initLazy() {

    let
      lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
      active = false,
      threshold = 200;

    const lazyLoad = function (e) {
      if (active === false) {
        active = true;

        setTimeout(function () {
          lazyArr.forEach(function (lazyObj) {
            if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

              if (lazyObj.dataset.src) {
                let
                  img = new Image(),
                  src = lazyObj.dataset.src;
                img.src = src;
                img.onload = function () {
                  if (!!lazyObj.parent) {
                    lazyObj.parent.replaceChild(img, lazyObj);
                  } else {
                    lazyObj.src = src;
                  }
                }
                lazyObj.removeAttribute('data-src');
              }

              if (lazyObj.dataset.srcset) {
                lazyObj.srcset = lazyObj.dataset.srcset;
                lazyObj.removeAttribute('data-srcset');
              }

              lazyObj.classList.remove('lazy');
              lazyObj.classList.add('lazy-loaded');

              lazyArr = lazyArr.filter(function (obj) {
                return obj !== lazyObj;
              });

              if (lazyArr.length === 0) {
                document.removeEventListener('scroll', lazyLoad);
                window.removeEventListener('resize', lazyLoad);
                window.removeEventListener('orientationchange', lazyLoad);
              }
            }
          });

          active = false;
        }, 200);
      }
    };

    lazyLoad();

    document.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
    window.addEventListener('orientationchange', lazyLoad);
  }

  function initScroll() {
    if (!$('.scroll').length) return;

    $(document).on('click scroll.init', '.scroll', function (event) {
        event.preventDefault();
        var hrefId = $(this).attr('href');
        var posTop = $(hrefId).offset().top -50;
        $('html, body').animate({ scrollTop: posTop }, 1000);
    });
}

  /*  EVENTS SLIDER */
  $('.event__slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
      }
    }
    ]
  });

  /*  RATING SLIDER */
  $('.rating__slider').slick({
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 6
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 400,
      settings: {
        arrows: false,
        slidesToShow: 1
      }
    }
    ]
  });

  /*  GALLERY SLIDER */
  $('.gallery__slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1199,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1
      }
    }
    ]
  });


  /*  MEDIA SLIDER */
  $('.media-page__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true
  });

  /*  VIDEO SLIDER */
  let $video_slider = $('.articles__video-slider'),
    settingsVideo = {
      mobileFirst: true,
      slidesToShow: 1,
      responsive: [{
        breakpoint: 575,
        settings: "unslick"
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 2
        }
      }
      ]
    }

  $video_slider.slick(settingsVideo);

  $(window).on('resize', function () {
    if (!$video_slider.hasClass('slick-initialized')) {
      return $video_slider.slick(settingsVideo);
    }
  });
  /*  PROFILE SLIDER */
  let $developments_slider = $('.developments-slider'),
    settingsDevelopments = {
      mobileFirst: true,
      slidesToShow: 1,
      responsive: [{
        breakpoint: 575,
        settings: "unslick"
      }
      ]
    }

  $developments_slider.slick(settingsDevelopments);

  $(window).on('resize', function () {
    if (!$developments_slider.hasClass('slick-initialized')) {
      return $developments_slider.slick(settingsDevelopments);
    }
  });

  /*  FIGHTS SLIDER */
  let $fights_slider = $('.fights-mob__poster'),
    settingsFights = {
      mobileFirst: true,
      slidesToShow: 1,
      responsive: [{
        breakpoint: 575,
        settings: "unslick"
      }]
    }

  $fights_slider.slick(settingsFights);

  $(window).on('resize', function () {
    if (!$fights_slider.hasClass('slick-initialized')) {
      return $fights_slider.slick(settingsFights);
    }
  });

  /*  NEW-PAGE-FIGHT SLIDER */
  let $newPage_slider = $('.new-page__slider'),
    settingsNewPage = {
      mobileFirst: true,
      slidesToShow: 1,
      responsive: [{
        breakpoint: 575,
        settings: "unslick"
      }]
    }

  $newPage_slider.slick(settingsNewPage);

  $(window).on('resize', function () {
    if (!$newPage_slider.hasClass('slick-initialized')) {
      return $newPage_slider.slick(settingsNewPage);
    }
  });

  $('.popup-user__overlay').on('click', function () {
    $('.popup-user').hide()
  })

  function initVideo() {
    //Управление воспроизведением и остановом видео
    $('.video-page__iframe').find('.video-page__img-player').on('click', function () {
      let parentBox = $(this).closest('.video-page__iframe');
      let iframeContainer = parentBox.find('.iframe-container');
      let $video = iframeContainer.find('iframe');
      let parentImg = $(this).closest('.video-page__img');
      parentImg.addClass('hide-img');
      if (!$video.length) {
        if (iframeContainer.length) {
          let videoSrc = iframeContainer.data('src');
          let iframeEl = `
                <iframe src="${videoSrc}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>`;

          iframeContainer.append(iframeEl)
          $video = iframeContainer.find('iframe');
        }
      }
      let src = $video.attr('src');
      $video.attr('src', src + '&autoplay=1');
      iframeContainer[0].setAttribute("data-play", "played");
    })
    //end - Управление воспроизведением и остановом видео
  }

  setTimeout(function () {
    $('select').styler();
  }, 100)

  function initTabs() {
    $('.all-tab__item').on('click', function (e) {
      e.preventDefault();
      let tabParent = $(this).closest('.all-tab')
      tabParent.find('.all-tab__item').removeClass('active')
      $(this).addClass('active');
    });
  }

  function initTournament() {
    $('.tournament__bg-tabs li').on('click', function (event) {
      event.preventDefault();
      $('.tournament__bg-tabs li').removeClass('current');
      $(this).addClass('current');
      var sel = this.getAttribute('data-tab');
      $('.tournament__grid-box').removeClass('current').filter(sel).addClass('current');
    });

  }

  function openProgram() {
    if ($(window).width() < 576) {
      let programs = $('.acco-item')
      programs.each(function (i, el) {
        let program = $(el)
        let programHeader = program.find('.acco-trigger')
        let programContent = program.find('.acco-content')

        programHeader.on('click', function () {
          if (program.hasClass('open')) {
            programContent.slideUp()
            program.removeClass('open')
          } else {
            programContent.slideDown()
            program.addClass('open')
          }
          // programContent.slideDown()
          // programContent.slideToggle()

        })
      })
    }
  }

  function initScrollHeader() {
    const header = $('.header');
    const scroll = $(window).scrollTop();
    if (scroll >= 100) {
      header.addClass('active');

    } else {
      header.removeClass('active');
    }
  }

  $(window).scroll(() => initScrollHeader())

  function openReview() {
    let reviews = $('.acco-item-rv')
    reviews.each(function (i, el) {
      let review = $(el)
      let reviewHeader = review.find('.acco-trigger-rv')
      let reviewContent = review.find('.acco-content-rv')

      reviewHeader.on('click', function () {
        if (review.hasClass('open')) {
          reviewContent.slideUp()
          review.removeClass('open')
        } else {
          reviewContent.slideDown()
          review.addClass('open')
        }
      })
    })
  }

  function initNumberField() {
    const fieldset = document.querySelector(".form__wrap");
    const fields = document.querySelectorAll(".form__field");
    const boxes = document.querySelectorAll(".form__box");

    function handleInputField({
      target
    }) {
      const value = target.value.slice(0, 1);
      target.value = value;

      const step = value ? 1 : -1;
      const fieldIndex = [...fields].findIndex((field) => field === target);
      const focusToIndex = fieldIndex + step;

      if (focusToIndex < 0 || focusToIndex >= fields.length) return;

      fields[focusToIndex].focus();
    }
    fields.forEach((field) => {
      field.addEventListener("input", handleInputField);
    });
  }


  $(".form__password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });


  let dataIndex = ''
  $('.broadcast-3__item').on('click', function () {
    dataIndex = $(this).attr('data-index')
  })

  function getActivePreview(activeTopIndex, action) {
    // let arraySlideAll = $('.broadcast-popup__bottom .slick-slide')
    // arraySlideAll.each(function (i) {
    //   array.push($(this).data('index'))
    // })
    //   console.log(activeLast + '' + 'активный')
    //   console.log(indexMain + '' + 'главный')
    // if (indexMain >= activeLast) {
    //   $('.broadcast-popup__bottom').slick(action);
    // }

    // let activeLast = active.last().index()

    // let indexMain = $('.main-slide').index()
    let active = $('.broadcast-popup__bottom .slick-active')
    let array = []
    active.each(function (i) {
      array.push($(this).data('slick-index'))
    })

    if (array.indexOf(activeTopIndex) === -1) {

      $('.broadcast-popup__bottom').slick(action);
    }


    // if(action === 'slickNext') {
    //   if(indexMain >= activeLast) {

    $('.broadcast-popup__bottom .slick-slide').removeClass('main-slide')
    $('.broadcast-popup__bottom').find("[data-index='" + activeTopIndex + "']").addClass('main-slide')
  }

  $("[data-fancybox]").fancybox({

    afterLoad: function () {
      $('.broadcast-popup__top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        infinite: true,
      });
      $('.broadcast-popup__bottom').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
        swipe: false,
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 5
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 4
            }
          }
        ]
      });
      $('.broadcast-popup__bottom .slick-slide').removeClass('main-slide')
      $('.broadcast-popup__bottom').find("[data-index='" + dataIndex + "']").addClass('main-slide')
      $('.broadcast-popup__top').slick('slickGoTo', dataIndex);
      $('.broadcast-popup__bottom').slick('slickGoTo', dataIndex);
      $('.broadcast-popup__bottom .slick-slide').on('click', function (event) {
        var dataIndex = $(event.currentTarget).data('index')
        $('.broadcast-popup__top').slick('slickGoTo', dataIndex);
        $('.broadcast-popup__bottom .slick-slide').removeClass('main-slide')
        $(this).addClass('main-slide')
      })

      $('.broadcast-popup__top .slick-next').on('click', function () {
        var dataIndex = $('.broadcast-popup__top .slick-current').data('index')
        getActivePreview(dataIndex, 'slickNext')

      })

      $('.broadcast-popup__top .slick-prev').on('click', function () {
        var dataIndex = $('.broadcast-popup__top .slick-current').data('index')
        getActivePreview(dataIndex, 'slickPrev')
      })

      $('.broadcast-popup__top').keydown(function (e) {
        switch (e.which) {
          case 37: // left
            var dataIndex = $('.broadcast-popup__top .slick-current').data('index')
            getActivePreview(dataIndex, 'slickPrev')
            break;

          case 39: // right

            var dataIndex = $('.broadcast-popup__top .slick-current').data('index')
            getActivePreview(dataIndex, 'slickNext')
            break;

          default: return;
        }
        e.preventDefault();
      });
    },

    afterClose: function () {
      $('.broadcast-popup__top').slick('unslick');
      $('.broadcast-popup__bottom').slick('unslick');
    }
  });
});


$(function () {
  $('.sidebar__item').on('click', function (e) {
    e.target.siblings().removeClass('active');
    console.log(e.target.siblings())
    // $(this).siblings().removeClass('active');
    $(this).addClass('active');
  })
});


$(function () {
  let itemId;
  let allLists;
  let speakerList;
  let eventsList;
  let themesList;
  let popupSpeakerInput = $('.popup--filter-speakers .popup__head_search_input');
  let popupThemeInput = $('.popup--filter-theme .popup__head_search_input');
  let popupEventInput = $('.popup--filter-events .popup__head_search_input');
  const sidebarMore = $(".sidebar__more");
  const sidebarBottom = $(".sidebar__bottom");
  const sidebarFilter = $(".sidebar__filter");
  const speakersFilter = $('#speakers-filter');
  const eventsFilter = $('#events-filter');

  $.ajax({
    url: "../libs/json/dataFilters.json",
    async: false,
    success: function (data) {
      allLists = data;
      themesList = data.themes;
      eventsList = data.events;
      speakerList = data.speakers;
      renderPopupThemes(themesList)
      renderPopupSpeakers(speakerList)
      renderPopupEvents(eventsList)
      renderSpeaker(speakerList)
      renderEvents(eventsList)
    }
  })

  /* Добавляем/убираем active на чекбокс по клику, а также рендерим выбранный фильтр в главном попапе всех фильтров */
  $('.popup--filter-selects').on('click', '.popup__block', function (e) {
    $(this).toggleClass('active')
    const checkBox = $(this).find('.popup__filter_checkbox');
    const textContent = $(this)
      .text()
      .trim()
      .replace(/\s{2,}/g, " ");

    if (checkBox.hasClass('active')) {
      checkBox.removeClass('active');
      const getAttrId = $(this).attr('data-popup-block');

      $(`.popup__head_elem[data-popup-filter=${getAttrId}]`).remove();
      $(`.sidebar__bottom_block[data-filter-block=${getAttrId}]`).remove();
      $(this).attr('data-popup-block', '')

      if ($('.popup__head_elem').length == 1) {
        $(".popup__head_elem-clear").remove();
        $(".sidebar__clear").remove();
      }
      if ($(this).parents().hasClass('popup--filter-events')) {
        parseArr(eventsList, 'event', 'name')
      } else if ($(this).parents().hasClass('popup--filter-speakers')) {
        parseArr(speakerList, 'speaker', 'name')
      } else if ($(this).parents().hasClass('popup--filter-theme')) {
        parseArr(themesList, 'theme', 'name')
      }

    } else {
      let eventsSvg;
      const titleText = $(this).parents('.popup__content_top').find('.popup__head_title').text();
      const nameText = $(this).find('.popup__subtitle').text();

      itemId = uid();
      checkBox.addClass('active')

      $(this).attr('data-popup-block', itemId);

      if ($(this).parents().hasClass('popup--filter-events')) {
        parseArr(eventsList, 'event', 'name')
      } else if ($(this).parents().hasClass('popup--filter-speakers')) {
        parseArr(speakerList, 'speaker', 'name')
      } else if ($(this).parents().hasClass('popup--filter-theme')) {
        parseArr(themesList, 'theme', 'name')
      }

      if ($(this).parents('.popup--filter-events')) {
        eventsSvg = $(this).find('.popup__subtitle_logo').find('svg').html()
      }

      if (!$(this).parents().hasClass('popup--filter-sort')) {
        createPopupFilterElement(titleText, nameText, itemId, eventsSvg)
        createFilteredElem(titleText, nameText, itemId, eventsSvg)
      }
    }

    if (
      $('.popup__head_elem').length == 1 &&
      !$('.popup__head_elem-clear').length
    ) {
      createPopupClearFiltersButton();
      createRemoveAllButton();
    }

    function parseArr(arr, elem, name) {
      $.each(arr, (key, value) => {
        let data = value[elem]
        $.each(data, (ind, item) => {
          if (textContent.toLowerCase() === item[name].toLowerCase() && !item["id"]) {
            item["id"] = itemId;
          } else if (textContent.toLowerCase() === item[name].toLowerCase() && item["id"]) {
            item["id"] = null
          }
        })
      })
    }

    /// Паралеллим активные элементы для десктопного фильтра если выбрали активный блок в попапе
    let sidebarCheckedElem = $(`<div class="sidebar__item-check">
        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.625 7.375L7.5 9.25L13.75 3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.125 8V12.375C13.125 12.7065 12.9933 13.0245 12.7589 13.2589C12.5245 13.4933 12.2065 13.625 11.875 13.625H3.125C2.79348 13.625 2.47554 13.4933 2.24112 13.2589C2.0067 13.0245 1.875 12.7065 1.875 12.375V3.625C1.875 3.29348 2.0067 2.97554 2.24112 2.74112C2.47554 2.5067 2.79348 2.375 3.125 2.375H10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        </div>`);
    let popupBlockId = $(this).attr('data-popup-block');
    $.each($('.sidebar__item-inner'), (ind, item) => {
      let searchItem = $(item).text().trim().replace(/\s{2,}/g, " ")
      if (textContent === searchItem) {
        let findElem = $(item).parents('.sidebar__item').attr('data-filter-item', popupBlockId).toggleClass('active');
        if (!findElem.hasClass('active')) {
          findElem.find('.sidebar__item-check').remove()
        } else {
          sidebarCheckedElem.appendTo(findElem);
        }

      }
    })
  })

  /* Рендер списка тем */
  function renderPopupThemes(themesObj) {
    const boxFilter = $('.popup--filter-theme .popup__enum')
    boxFilter.find('.popup__block').remove();

    $.each(themesObj, function (i, chapter) {
      let boxChapter;

      if (chapter.theme) {
        $.each(chapter.theme, function (i, fact) {
          boxChapter = $(`<div class="popup__block popup__theme popup__border-bottom" ${fact.id ? `data-popup-block=${fact.id}` : ''}></div>`);
          boxChapter.appendTo(boxFilter);
          $(`<div class="popup__box">
            <div class="popup__subtitle popup__theme_subtitle pointer-events">${fact.name}</div>
            <div class="popup__filter_checkbox ${fact.id ? `active` : ''}">
              <div class="popup__filter_checkbox-checked">
              <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
                </div>
            </div>
          </div>`).appendTo(boxChapter)
        })
      } else {
        boxChapter = $(`<div class="popup__block popup__theme popup__border-bottom" data-popup-block=${chapter.elemId}></div>`);
        boxChapter.appendTo(boxFilter);
        $(`<div class="popup__box">
            <div class="popup__subtitle popup__theme_subtitle pointer-events">${chapter.elemName}</div>
            <div class="popup__filter_checkbox ${chapter.elemId ? `active` : ''}">
              <div class="popup__filter_checkbox-checked ">
              <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              </div>
            </div>
          </div>`).appendTo(boxChapter)
      }
    })
  }

  /* Обработчик кликов в инпуте тем (фильтрация) */
  popupThemeInput.on('input', function () {
    const filterValue = popupThemeInput.val().toLowerCase();
    const filteredElements = [];

    $.each(themesList, (key, data) => {
      $.each(data.theme, (i, value) => {
        const elemName = value.name;
        const elemId = value.id;
        if (elemName.toLowerCase().includes(filterValue)) {
          filteredElements.push({
            elemName,
            elemId
          });
        }
      })
    })

    if (popupThemeInput.val().length < 1) {
      renderPopupThemes(themesList);
    } else {
      renderPopupThemes(filteredElements);
    }
  })

  /* Рендер списка спикеров в попапе fancybox */
  function renderPopupSpeakers(speakerObj) {
    let boxChapter;
    const boxFilter = $('.popup--filter-speakers .popup__enum');
    const filterContainer = $(`<div class="popup__alphabet"></div>`);

    boxFilter.find('.popup__alphabet').remove();
    $('.popup--filter-speakers .popup__enum .popup__block').remove();

    $.each(speakerObj, function (i, chapter) {
      if (chapter.speaker) {
        boxChapter = $(`
        <div class="popup__alphabet">
        </div>
        `);
        const appendedBlock = boxChapter.appendTo(boxFilter);
        $(`<div class="popup__word">${chapter.letter}</div>`).appendTo(appendedBlock);
        $.each(chapter.speaker, function (i, person) {
          $(`
          <div class="popup__block popup__speaker popup__border-bottom"  ${person.id ? `data-popup-block=${person.id}` : ''}>
            <div class="popup__box">
              <div class="popup__subtitle popup__speaker_subtitle ">${person.name}</div>
              <div class="popup__filter_checkbox ${person.id ? `active` : ''}">
                <div class="popup__filter_checkbox-checked">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>
           
              </div>
            </div>
                </div>`).appendTo(appendedBlock)
        })
      } else {
        const filtered =
          $(`
        <div class="popup__block popup__speaker popup__border-bottom" data-popup-block=${chapter.elemId}>
          <div class="popup__box">
            <div class="popup__subtitle popup__speaker_subtitle pointer-events">${chapter.elemName}</div>
            <div class="popup__filter_checkbox ${chapter.elemId ? `active` : ''}">
              <div class="popup__filter_checkbox-checked">
              <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              </div>
        
            </div>
          </div>
        </div>`).appendTo(filterContainer)
        filtered.appendTo(boxFilter)
      }
    })
  }

  popupSpeakerInput.on('input', function () {
    const filterValue = popupSpeakerInput.val().toLowerCase();
    const filteredElements = [];

    $.each(speakerList, (key, data) => {
      $.each(data.speaker, (i, value) => {
        const elemName = value.name;
        const elemId = value.id;
        if (elemName.toLowerCase().includes(filterValue)) {
          filteredElements.push({
            elemName,
            elemId
          });
        }
      })
    })

    if (popupSpeakerInput.val().length < 1) {
      renderPopupSpeakers(speakerList);
    } else {
      renderPopupSpeakers(filteredElements);
    }
  })

  /* Рендер списка тем */
  function renderPopupEvents(eventsObj) {
    const boxFilter = $('.popup--filter-events .popup__enum')
    boxFilter.find('.popup__block').remove();

    $.each(eventsObj, function (i, chapter) {
      let boxChapter;

      if (chapter.event) {
        $.each(chapter.event, function (i, fact) {
          boxChapter = $(`<div class="popup__block popup__events popup__border-bottom" ${fact.id ? `data-popup-block=${fact.id}` : ''}></div>`);
          boxChapter.appendTo(boxFilter);
          $(`<div class="popup__box">
            <div class="popup__subtitle popup__theme_subtitle pointer-events">
              <div class="popup__subtitle_logo">
                ${fact.img}
              </div>
              <div class="popup__subtitile_text">${fact.name}</div>
            </div>
            <div class="popup__filter_checkbox ${fact.id ? `active` : ''}">
              <div class="popup__filter_checkbox-checked">
              <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
  
  
              </div>
      
            </div>
          </div>`).appendTo(boxChapter)
        })
      } else {
        boxChapter = $(`<div class="popup__block popup__events popup__border-bottom" data-popup-block=${chapter.elemId}></div>`);
        boxChapter.appendTo(boxFilter);
        $(`<div class="popup__box" >
          <div class="popup__subtitle popup__theme_subtitle pointer-events">
            <div class="popup__subtitle_logo">
              ${chapter.elemImg}
            </div>
            <div class="popup__subtitile_text">${chapter.elemName}</div>
          </div>
          <div class="popup__filter_checkbox ${chapter.elemId ? `active` : ''}">
            <div class="popup__filter_checkbox-checked">
            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 8L4 11L14 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </div>
          </div>
        </div>`).appendTo(boxChapter)
      }
    })
  }

  /* Обработчик кликов в инпуте событий (фильтрация) */
  popupEventInput.on('input', function () {
    const filterValue = popupEventInput.val().toLowerCase();
    const filteredElements = [];

    $.each(eventsList, (key, data) => {
      $.each(data.event, (i, value) => {
        const elemName = value.name;
        const elemImg = value.img;
        const elemId = value.id;
        if (elemName.toLowerCase().includes(filterValue)) {
          filteredElements.push({
            elemName,
            elemImg,
            elemId
          });
        }
      })
    })

    if (popupEventInput.val().length < 1) {
      renderPopupEvents(eventsList);
    } else {
      renderPopupEvents(filteredElements);
    }
  })

  /* Функции и обработчики для работы с попапами фильтров в synergybase */

  /* Логика фильтра сортировки в мобильной версии */
  $('.popup--filter-sort').on('click', '.popup__block', function (e) {
    $('.popup__sort .popup__box').removeClass('active');
    const activeClass = $(this).find('.popup__box').addClass('active')
    const textContent = activeClass.find('.popup__subtitle').text();
    $.fancybox.close();
    $('.sidebar__title_sorted-mobile').text(textContent);
  })

  /* Если удаляем конкретный фильтр в главном попапе всех фильтров, то убираем active у чекбокса */
  $('.popup__head_bottom').on('click ', '.popup__head_img, .popup__head_elem-clear', function (e) {
    let getItemId;
    if ($(this).hasClass("popup__head_img") && !$(this).parent().hasClass("popup__head_elem-clear")) {
      getItemId = $(this).parent().attr('data-popup-filter');
      $(`.popup__block[data-popup-block=${getItemId}]`).attr('data-popup-block', '').find('.popup__filter_checkbox').removeClass('active');
      $(`.sidebar__bottom_block[data-filter-block=${getItemId}]`).attr('data-filter-block', '').remove();
      $(`.sidebar__bottom_block[data-filter-block=${getItemId}]`).attr('data-filter-block', '').remove();
      $(`.sidebar__item[data-filter-item=${getItemId}]`).attr('data-filter-item', '').removeClass('active').find('.sidebar__item-check').remove();
      $(this).parent().remove();

      deepSearchId(allLists)
    }
    if ($(this).hasClass('popup__head_elem-clear')) {
      $('.popup__head_elem').remove();
      $('.popup--filter-selects').find('.popup__block').attr('data-popup-block', '').find('.popup__filter_checkbox').removeClass('active');
      $('.sidebar__bottom_block').remove()
      $('.sidebar__item').attr('data-filter-item', '').removeClass('active').find('.sidebar__item-check').remove()
      $(".sidebar__clear").remove();
      clearAllIdInJson(allLists);
    }

    if ($('.popup__head_elem').length == 1) {
      $(".popup__head_elem-clear").remove();
      $(".sidebar__clear").remove();
    }

    function clearAllIdInJson(jsonObj) {
      for (const key in jsonObj) {
        if (jsonObj.hasOwnProperty(key)) {
          const shallowElements = jsonObj[key];
          $.each(shallowElements, function (ind, foo) {
            for (const val in foo) {
              if (foo.hasOwnProperty(val)) {
                const deepElements = foo[val];
                if (deepElements instanceof Array) {
                  $.each(deepElements, function (ind, bar) {
                    if (bar["id"]) {
                      bar["id"] = null
                    }
                  })
                }
              }
            }
          })
        }
      }
    }

    function deepSearchId(jsonTemplate) {
      let idValue;
      for (const key in jsonTemplate) {
        if (jsonTemplate.hasOwnProperty(key)) {
          idValue = jsonTemplate[key]
          if (typeof idValue === "string" && key === "id" && idValue == $(e.target).parents('.popup__head_elem').attr('data-popup-filter')) {
            idValue = null;
            jsonTemplate["id"] = idValue

          } else if (typeof idValue === "object") {
            deepSearchId(idValue)
          }
        }
      }
    }

  }


  );

  /* Функция создание блока с выбранным фильтром */
  function createPopupFilterElement(title, name, id, svg = null) {
    const popupFilterBlock = $(`
    <div class="popup__head_elem" data-popup-filter=${id}>
      <div class="popup__head_name">${title}: ${svg ? `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">${svg}</svg>` : ''} ${name}</div>
      <div class="popup__head_img">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.5 3.5L3.5 10.5" stroke="#6B7B8E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M3.5 3.5L10.5 10.5" stroke="#6B7B8E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
      </div>
    </div>
    `)
    popupFilterBlock.prependTo($('.popup--filter-main .popup__head_bottom'));
  }

  /* Функция создание блока кнопки очистки всех фильтров */
  function createPopupClearFiltersButton() {
    const elem = $(`
      <div class="popup__head_elem popup__head_elem-clear">
        <div class="popup__head_name">Очистить все</div>
        <div class="popup__head_img">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.5 3.5L3.5 10.5" stroke="#6B7B8E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M3.5 3.5L10.5 10.5" stroke="#6B7B8E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        </div>
      </div>
    `);
    elem.appendTo($('.popup--filter-main .popup__head_bottom'));
  }


  ///// ОТКАТИТЬ ДО ДАННОГО МЕСТА!!!!

  /* Обработчик клика на блок выбранных фильтров  */
  sidebarBottom.on("click", ".sidebar__bottom_img, .sidebar__clear", function (e) {
    let getItemId;
    if ($(this).hasClass("sidebar__bottom_img")) {
      getItemId = $(this).parent().attr('data-filter-block');
      $(`.sidebar__item[data-filter-item=${getItemId}]`).removeClass('active').attr('data-filter-item', '').find('.sidebar__item-check').remove();
      $(`.popup__head_elem[data-popup-filter=${getItemId}]`).remove()
      $(`.popup__block[data-popup-block=${getItemId}]`).attr('data-popup-block', '').find('.popup__filter_checkbox').removeClass('active');
      $(this).parent().remove();
      deepSearchId(allLists)
    } else {
      $(".sidebar__bottom_block").remove();
      $(".sidebar__item").removeClass("active").attr('data-filter-item', '');
      $(".sidebar__item-check").remove();
      $(".popup__head_elem").remove();
      $(".popup__block").attr('data-popup-block', '').find('.popup__filter_checkbox').removeClass('active')
      clearAllIdInJson(allLists)
    }

    if (!$(".sidebar__bottom_block").length) {
      $(".sidebar__clear").remove();
      $(".popup__head_elem-clear").remove();
    }


    function clearAllIdInJson(jsonObj) {

      for (const key in jsonObj) {
        if (jsonObj.hasOwnProperty(key)) {
          const shallowElements = jsonObj[key];
          $.each(shallowElements, function (ind, foo) {
            for (const val in foo) {
              if (foo.hasOwnProperty(val)) {
                const deepElements = foo[val];
                if (deepElements instanceof Array) {
                  $.each(deepElements, function (ind, bar) {
                    if (bar["id"]) {
                      bar["id"] = null
                    }
                  })
                }
              }
            }
          })
        }
      }
    }

    function deepSearchId(jsonTemplate) {
      let idValue;
      for (const key in jsonTemplate) {
        if (jsonTemplate.hasOwnProperty(key)) {
          idValue = jsonTemplate[key]
          if (typeof idValue === "string" && key === "id" && idValue == $(e.target).parents('.sidebar__bottom_block').attr('data-filter-block')) {
            idValue = null;
            jsonTemplate["id"] = idValue

          } else if (typeof idValue === "object") {
            deepSearchId(idValue)
          }
        }
      }
    }
  });


  /* Обработчик клика на пункте с dropdown фильтром  */
  sidebarFilter.on("click", '.sidebar__item', function (e) {
    e.preventDefault();
    const textContent = $(this)
      .text()
      .trim()
      .replace(/\s{2,}/g, " ");
    const itemName = $(this)
      .parents(".sidebar__filter")
      .siblings()
      .text()
      .trim()
      .replace(/\s{2,}/g, " ");
    const checkElem = $(`<div class="sidebar__item-check">
        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.625 7.375L7.5 9.25L13.75 3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.125 8V12.375C13.125 12.7065 12.9933 13.0245 12.7589 13.2589C12.5245 13.4933 12.2065 13.625 11.875 13.625H3.125C2.79348 13.625 2.47554 13.4933 2.24112 13.2589C2.0067 13.0245 1.875 12.7065 1.875 12.375V3.625C1.875 3.29348 2.0067 2.97554 2.24112 2.74112C2.47554 2.5067 2.79348 2.375 3.125 2.375H10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        </div>`);

    $(this).addClass("active");

    // Проверяем выбран ли данный фильтр, если нет то добавляем check, и рендерим фильтрующий блок
    if ($(this).find(".sidebar__item-check").length === 0) {
      itemId = uid()
      let eventsSvgBlock;

      if ($(this).parents('.sidebar__filter_events')) {
        eventsSvgBlock = $(this).find('.sidebar__item-inner').find('svg').html()
      }

      checkElem.appendTo($(this));
      if (!$(this).parents().hasClass("sidebar__filter_sorted")) {

        if ($(this).parents().hasClass('sidebar__filter_events')) {
          parseArr(eventsList, 'event', 'name')
        } else if ($(this).parents().hasClass('sidebar__filter_speakers')) {
          parseArr(speakerList, 'speaker', 'name')
        }

        createPopupFilterElement(itemName, textContent, itemId, eventsSvgBlock);
        createFilteredElem(itemName, textContent, itemId, eventsSvgBlock);
        $(this).attr('data-filter-item', itemId);
      }
    } else if ($(this).attr('data-filter-item')) {
      const getItemId = $(this).attr('data-filter-item')
      $(this).removeClass('active');
      $(`.sidebar__bottom_block[data-filter-block=${getItemId}]`).remove();
      $(`.popup__head_elem[data-popup-filter=${getItemId}]`).remove();
      $(this).find($('.sidebar__item-check')).remove();
      $(this).attr('data-filter-item', '')

      if (!$(".sidebar__bottom_block").length) {
        $(".sidebar__clear").remove();
        $(".popup__head_elem-clear").remove();
      }

      if ($(this).parents().hasClass('sidebar__filter_events')) {
        parseArr(eventsList, 'event', 'name')
      } else if ($(this).parents().hasClass('sidebar__filter_speakers')) {
        parseArr(speakerList, 'speaker', 'name')
      }
    }

    if (
      $(".sidebar__bottom_block").length == 1 &&
      !$(".sidebar__clear").length
    ) {
      createRemoveAllButton();
      createPopupClearFiltersButton();
    }
    if ($(this).parents().hasClass("sidebar__filter_sorted")) {
      $(".sidebar__title_sorted").text($(this).text());
      $(this).siblings().removeClass('active').find('.sidebar__item-check').remove();
    }

    function parseArr(arr, elem, name) {
      $.each(arr, (key, value) => {
        let data = value[elem]
        $.each(data, (ind, item) => {
          if (textContent.toLowerCase() === item[name].toLowerCase() && !item["id"]) {
            item["id"] = itemId;
          } else if (textContent.toLowerCase() === item[name].toLowerCase() && item["id"]) {
            item["id"] = null
          }
        })
      })
    }

    /// Паралеллим активные элементы для мобильного фильтра если выбрали активный блок в десктопе
    let filterBlockId = $(this).attr('data-filter-item');
    $.each($('.popup__subtitle'), (ind, item) => {
      let searchItem = $(item).text().trim().replace(/\s{2,}/g, " ")
      if (textContent === searchItem) {
        let findElem = $(item).parents('.popup__block').attr('data-popup-block', filterBlockId).find('.popup__filter_checkbox').toggleClass('active');
        // sidebarCheckedElem.appendTo(findElem);

      }
    })


  });

  /* Функция создание блока при клике на фильтр */
  function createFilteredElem(name, text, id, svg = null) {
    const elem = $(`
          <div class="sidebar__bottom_block" data-filter-block=${id}>
          <span class="sidebar__bottom_name">${name}:</span>
          ${svg ? `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">${svg}</svg>` : ''}
            <span class="sidebar__bottom_text">${text}</span>
            <div class="sidebar__bottom_img">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 3L4 11" stroke="#E8E9EC" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 3L12 11" stroke="#E8E9EC" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
      `);
    const rowBottom = $(".sidebar__bottom_content");
    elem.appendTo(rowBottom);
  }

  /* Функция создание блока кнопки очистки всех фильтров */
  function createRemoveAllButton() {
    const elem = $(`
          <div class="sidebar__clear">
            <div class="sidebar__clear_img">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 3.99988L4 11.9999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M4 3.99988L12 11.9999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </div>
          </div>
        `);
    const rowBottom = $(".sidebar__bottom_content");
    elem.prependTo(rowBottom);
  }

  /* Рендер и фильтрация */

  /* Обработчик кликов в инпуте спикеров (фильтрация) */
  speakersFilter.on('input', function () {
    const filterValue = speakersFilter.val().toLowerCase();
    const filteredElements = [];

    $.each(speakerList, (key, data) => {
      $.each(data.speaker, (i, value) => {
        const elemName = value.name;
        const elemId = value.id;
        if (elemName.toLowerCase().includes(filterValue)) {
          filteredElements.push({
            elemName,
            elemId
          });
        }
      })
    })

    if (speakersFilter.val().length < 1) {
      renderSpeaker(speakerList);
    } else {
      renderSpeaker(filteredElements);
    }
  })

  /* Рендер списка спикеров */
  function renderSpeaker(speakerObj) {
    $('.sidebar__filter_speakers').find('.sidebar__box_chapter').remove();
    const boxFilter = $('.sidebar__filter_speakers').find('.sidebar__box');
    let boxChapter
    $.each(speakerObj, function (i, chapter) {
      boxChapter = $(`
            <div class="sidebar__box_chapter">
            </div>
            `);
      const appendedBlock = boxChapter.appendTo(boxFilter);
      if (chapter.speaker) {
        $(`<div class="sidebar__box_chapter_head">${chapter.letter}</div>`).appendTo(appendedBlock);
        $.each(chapter.speaker, function (i, person) {
          $(`<a class="sidebar__item ${person.id ? `active` : ''}"  ${person.id ? `data-filter-item=${person.id}` : ''}>
                        <span class="sidebar__item-inner">${person.name}</span>
                        ${person.id ? `<div class="sidebar__item-check">
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 7.375L7.5 9.25L13.75 3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.125 8V12.375C13.125 12.7065 12.9933 13.0245 12.7589 13.2589C12.5245 13.4933 12.2065 13.625 11.875 13.625H3.125C2.79348 13.625 2.47554 13.4933 2.24112 13.2589C2.0067 13.0245 1.875 12.7065 1.875 12.375V3.625C1.875 3.29348 2.0067 2.97554 2.24112 2.74112C2.47554 2.5067 2.79348 2.375 3.125 2.375H10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>` : ''
            }
                    </a>`).appendTo(appendedBlock)
        })
      } else {
        appendedBlock.addClass('sidebar__box_chapter-border-none')
        $(`<a class="sidebar__item ${chapter.elemId ? `active` : ''}" data-filter-item=${chapter.elemId}>
                <span class="sidebar__item-inner">${chapter.elemName}</span>
                ${chapter.elemId ? `<div class="sidebar__item-check">
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.625 7.375L7.5 9.25L13.75 3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.125 8V12.375C13.125 12.7065 12.9933 13.0245 12.7589 13.2589C12.5245 13.4933 12.2065 13.625 11.875 13.625H3.125C2.79348 13.625 2.47554 13.4933 2.24112 13.2589C2.0067 13.0245 1.875 12.7065 1.875 12.375V3.625C1.875 3.29348 2.0067 2.97554 2.24112 2.74112C2.47554 2.5067 2.79348 2.375 3.125 2.375H10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>` : ''
          }
            </a>`).appendTo(appendedBlock)
      }
    })
  }

  /* Обработчик кликов в инпуте событий (фильтрация) */
  eventsFilter.on('input', function () {
    const filterValue = eventsFilter.val().toLowerCase();
    const filteredElements = [];

    $.each(eventsList, (key, data) => {
      $.each(data.event, (i, value) => {
        const elemName = value.name;
        const elemImg = value.img;
        const elemId = value.id;
        if (elemName.toLowerCase().includes(filterValue)) {
          filteredElements.push({
            elemName,
            elemImg,
            elemId
          });
        }
      })
    })

    if (eventsFilter.val().length < 1) {
      renderEvents(eventsList);
    } else {
      renderEvents(filteredElements);
    }
  })

  /* Рендер списка ивентов */
  function renderEvents(eventsObj) {

    $('.sidebar__filter_events').find('.sidebar__box_chapter').remove();
    const boxFilter = $('.sidebar__filter_events').find('.sidebar__box');
    let boxChapter = $(`
        <div class="sidebar__box_chapter">
        </div>
        `);
    const appendedBlock = boxChapter.appendTo(boxFilter);
    $.each(eventsObj, function (i, chapter) {
      if (chapter.event) {
        $.each(chapter.event, function (i, fact) {
          $(`<a class="sidebar__item ${fact.id ? `active` : ''}" ${fact.id ? `data-filter-item=${fact.id}` : ''}>
                        <span class="sidebar__item-inner">
                            ${fact.img}
                            <span class="sidebar__item-name">${fact.name}</span>
                        </span>
                        ${fact.id ? `<div class="sidebar__item-check">
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.625 7.375L7.5 9.25L13.75 3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.125 8V12.375C13.125 12.7065 12.9933 13.0245 12.7589 13.2589C12.5245 13.4933 12.2065 13.625 11.875 13.625H3.125C2.79348 13.625 2.47554 13.4933 2.24112 13.2589C2.0067 13.0245 1.875 12.7065 1.875 12.375V3.625C1.875 3.29348 2.0067 2.97554 2.24112 2.74112C2.47554 2.5067 2.79348 2.375 3.125 2.375H10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>` : ''
            }
                    </a>`).appendTo(boxChapter)
        })
      } else {
        appendedBlock.addClass('sidebar__box_chapter-border-none')

        $(`<a class="sidebar__item ${chapter.elemId ? `active` : ''}" data-filter-item=${chapter.elemId}>
                    <span class="sidebar__item-inner">
                        ${chapter.elemImg}
                        <span class="sidebar__item-name">${chapter.elemName}</span>
                    </span>
                    ${chapter.elemId ? `<div class="sidebar__item-check">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.625 7.375L7.5 9.25L13.75 3" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.125 8V12.375C13.125 12.7065 12.9933 13.0245 12.7589 13.2589C12.5245 13.4933 12.2065 13.625 11.875 13.625H3.125C2.79348 13.625 2.47554 13.4933 2.24112 13.2589C2.0067 13.0245 1.875 12.7065 1.875 12.375V3.625C1.875 3.29348 2.0067 2.97554 2.24112 2.74112C2.47554 2.5067 2.79348 2.375 3.125 2.375H10" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
  
                    </div>` : ''
          }
                </a>`).appendTo(appendedBlock)
      }
    })
  }

  /* Функция для создания уникального id */
  function uid() {
    return (
      performance.now().toString(36) + Math.random().toString(36)
    ).replace(/\./g, "");
  }

  $('.popup__head_back, .popup__head_button, .popup-category__head-close').on('click ', function (e) {
    e.preventDefault();
    $.fancybox.close();
  })

  /* Очищаем инпут в попапе при нажатии на крестик */
  $('.popup__head_search_clear').on('click', function () {
    $('.popup__head_search_input').val('');
    if ($(this).parents().hasClass('popup--filter-events')) {
      renderPopupEvents(eventsList)
    } else if ($(this).parents().hasClass('popup--filter-speakers')) {
      renderPopupSpeakers(speakerList)
    } else if ($(this).parents().hasClass('popup--filter-theme')) {
      renderPopupThemes(themesList)
    }
  })

  $("[data-filter-fancybox], .popup__head_button").on('click', function () {
    setTimeout(() => {
      if ($('.fancybox-is-open').length) {
        $('body').addClass('body-noscroll')
      } else {
        $('body').removeClass('body-noscroll')
      }

    }, 100);
  })

  if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
    sidebarFilter.on('mouseenter', function () {
      $('body').addClass('block-scroll')
    })

    sidebarFilter.on('mouseleave', function () {
      $('body').removeClass('block-scroll')
    })
  }

  /* Обработчик клика на кнопку показать ещё */
  sidebarMore.on("click", function () {
    $(this).text() == "Показать все" ?
      $(this).text("Скрыть") :
      $(this).text("Показать все");
    $(this).siblings(".sidebar__item_none").slideToggle(450);
    $(this).toggleClass("active");
  });
})

$(document).click(function (e) {
  let target = $(e.target);
  let parentTag = ".sidebar__inner";
  let barFilter = $(".sidebar__filter");
  let barTitle = $(".sidebar__title");
  if (
    target.hasClass("sidebar__title") &&
    target.closest(parentTag).length
  ) {
    if (target.siblings().hasClass("active")) {
      barFilter.removeClass("active");
      barTitle.removeClass("active");
      return;
    } else if (!target.siblings().hasClass("active")) {
      barFilter.removeClass("active");
      barTitle.removeClass("active");
      target.siblings().addClass("active");
      target.addClass("active");
      return;
    }
  }
  if (!target.parents(".sidebar__filter").hasClass("active")) {
    barFilter.removeClass("active");
    barTitle.removeClass("active");
  }
});