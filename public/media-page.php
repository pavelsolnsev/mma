<!DOCTYPE html>


	<?php
	$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
	$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
	$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
	$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
    $version = 'media-page';
    include_once $ROOT . 'version.php';
	?>


<html lang="ru">
<head>
	<base href="<?= $BASE_HREF ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<meta name="facebook-domain-verification" content="jkslt3kpfd9pezhs58tdnjhzt01oyi">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/> -->
	<link rel="stylesheet" href="libs/jquery.formstyler.css">
	<link rel="stylesheet" href="libs/jquery.formstyler.theme.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-<?= $gtm ?>');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2487426621502508');
		fbq('track', 'PageView');
	</script>
</head>

<body class="<?= $version ? 'version-' . $version : '' ?> ">
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1" /></noscript>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	
	<div class="wrapper">
		
	<header class="header">
	<div class="container">
		<div class="header__content">
			<div class="header__logo">
				<img data-src="img/header/logo.svg" alt="ММА РФ" class="lazy">
			</div>
			<nav class="header__menu">
				<ul>
					<li><a href="/">События</a></li>
					<li><a href="#rating" class="scroll">Рейтинг</a></li>
					<li><a href="/">Новости</a></li>
					<li class="header__menu-live"><a href="/">Медиа</a></li>
				</ul>
			</nav>

			<div class="header__login" href="/">
				<button></button>
				<a href="/">
					<span>Василий</span>
					<img data-src="img/header/avatar.png" alt="" class="lazy header__avatar">
				</a>
			</div>
			<!-- <div class="header__search">
				<div class="header__wrap">
					<input type="search" placeholder="События, трансляции, бойцы" name="search">
					<button type="submit"></button>
				</div>
				<a href="/">
					<img data-src="img/header/avatar.png" alt="" class="lazy header__avatar">
				</a>
			</div> -->
		</div>
	</div>
</header>
	<section class="media-page" id="media-page">
  <div class="media-page__slider">
    <div class="media-page__content" style="background-image: url('../img/media-page/fon1.jpg')">
      <div class="container">
        <div class="media-page__item">
          <div class="media-page__live">live</div>
          <h1 class="media-page__title title">Чемпионат и&nbsp;первенства Санкт-Петербурга среди юношей и&nbsp;юниоров</h1>
          <a href="/" class="media-page__play"><img data-src="img/media-page/play.png" alt="" class="lazy"> Смотреть</a>
        </div>
      </div>
    </div>
    <div class="media-page__content" style="background-image: url('../img/media-page/fon2.jpg')">
      <div class="container">
        <div class="media-page__item">
          <div class="media-page__live">live</div>
          <h1 class="media-page__title title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis aspernatur odit veniam non ipsum sed tempore nisi beatae debitis natus, ipsam qui? Aliquam omnis dicta nesciunt ea rerum, porro at!</h1>
          <a href="/" class="media-page__play"><img data-src="img/media-page/play.png" alt="" class="lazy"> Смотреть</a>
        </div>
      </div>
    </div>
    <div class="media-page__content" style="background-image: url('../img/media-page/fon3.jpg')">
      <div class="container">
        <div class="media-page__item">
          <div class="media-page__live">live</div>
          <h1 class="media-page__title title">Чемпионат и&nbsp;первенства Санкт-Петербурга среди юношей и&nbsp;юниоров fsdfdsfsdf fdsfsdfdsf ываываываыва авыаываываыва</h1>
          <a href="/" class="media-page__play"><img data-src="img/media-page/play.png" alt="" class="lazy"> Смотреть</a>
        </div>
      </div>
    </div>
  </div>


  <div class="media-page__box">
    <div class="media-page__section ether">
      <div class="container">
        <h2 class="media-page__section-title title">Сейчас в эфире</h2>
        <div class="media-page__wrapper">
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-live">live</div>
                <img data-src="img/media-page/icon-1.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-live">live</div>
                <img data-src="img/media-page/icon-1.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-live">live</div>
                <img data-src="img/media-page/icon-1.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-live">live</div>
                <img data-src="img/media-page/icon-1.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
        </div>
      </div>
    </div>

    <div class="media-page__section broadcast">
      <div class="container">
        <div class="breadcrumbs">
          <h1 class="title media-page__section-title breadcrumbs__title">Трансляции<img data-src="img/common/icon.svg" alt="" class="lazy"></h1>
          <div class="media-page__section-tab breadcrumbs__tab all-tab">
            <a class="breadcrumbs__tab-present active all-tab__item" href="/">Предстоящие</a>
            <a class="breadcrumbs__tab-past all-tab__item" href="/">Прошедшие</a>
          </div>
        </div>
        <div class="media-page__wrapper">
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-anons">
                  <span>анонс</span>
                  <span>16:30 22 июля</span>
                </div>
                <img data-src="img/media-page/icon-2.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-anons">
                  <span>анонс</span>
                  <span>16:30 22 июля</span>
                </div>
                <img data-src="img/media-page/icon-2.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-anons">
                  <span>анонс</span>
                  <span>16:30 22 июля</span>
                </div>
                <img data-src="img/media-page/icon-2.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="media-page__section-anons">
                  <span>анонс</span>
                  <span>16:30 22 июля</span>
                </div>
                <img data-src="img/media-page/icon-2.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
        </div>
        <a href="/" class="media-page__button button more-button">Показать ещё <img data-src="img/common/more.svg" alt="" class="lazy"></a>
      </div>
    </div>

    <div class="media-page__section sport">
      <div class="container">
        <h2 class="title media-page__section-title">Спортсмены<img data-src="img/common/icon.svg" alt="" class="lazy"></h2>
        <div class="media-page__wrapper">
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-3.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-3.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-3.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-3.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
        </div>
        <a href="/" class="media-page__button button more-button">Показать ещё <img data-src="img/common/more.svg" alt="" class="lazy"></a>
      </div>
    </div>

    <div class="media-page__section club">
      <div class="container">
        <h2 class="title media-page__section-title">Клубы<img data-src="img/common/icon.svg" alt="" class="lazy"></h2>
        <div class="media-page__wrapper">
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-4.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-4.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-4.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
          <article class="media-page__col">
            <a href="/" class="media-page__item">
              <div class="media-page__img">
                <div class="video media-page__section-video"><span>00:00</span></div>
                <img data-src="img/media-page/icon-4.png" alt="" class="lazy">
              </div>
              <h3>Исраэль Адесанья vs&nbsp;Марвин Веттори&nbsp;&mdash; Битва взглядов с&nbsp;пресс-конференции</h3>
              <div class="media-page__wrap">
                <span>Исраэль Адесанья</span>
                <span>Марвин Веттори</span>
                <span>Название мероприятия</span>
              </div>
              <span class="media-page__date">22 июля 2021 16,2 тыс зрителей</span>
            </a>
          </article>
        </div>
        <a href="/" class="media-page__button button more-button">Показать ещё <img data-src="img/common/more.svg" alt="" class="lazy"></a>
      </div>
    </div>
    <picture class="articles__banner_2 media-page__banner">
      <source media="(max-width: 575px)" srcset="img/articles/banner-mob.jpg">
      <img alt="" class="lazy-loaded" src="img/articles/banner.jpg">
    </picture>
  </div>
</section>
	<footer class="footer">
    <div class="container">
        <div class="footer__box">
            <div class="footer__logo"><img src="img/footer/logo.svg" alt="Synergy master class. Большая цель достижима" class="footer__logo-img"></div>
            <div class="footer__form">
                
<form action="<?=$action?>&form=reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Подпишись на новости MMA</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Почта" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            <div class="form__item form__item_button"><button class="form__button button" type="submit">Подписаться</button></div>
        </div><!-- form__items -->
    </div>
</form>

            </div>
            <ul class="footer__list">
                <li>
                    <a href="#">Партнёрам и организаторам мероприятий</a>
                    <a href="mailto:help@mma.local"><strong>help@mma.local</strong></a>
                </li>
                <li><a href="#"><strong>Мы всегда готовы вам помочь - звоните или пишите</strong></a></li>
                <li class="footer__list-item">
                    <div>
                        <a href="/privacy">Пользовательское соглашение</a>
                        <a href="">Публичная оферта</a>
                    </div>
                    <div>
                        <a href="/privacy">Политика конфиденциальности</a>
                        <a href="">Политика возврата</a>
                    </div>
                </li>
                <!--<li><a class="inactive-link" href="#"></a></li>-->
                <li class="footer__list-faq"><a onclick="$('#popup-faq').show();" style="cursor: pointer">Задать вопрос</a></li>
                <li><a href="/requisites">Реквизиты</a></li>
            </ul>
        </div>
        <div class="footer__social">
            <div class="footer__social-text">Сетевое издание &laquo;ММА.РФ&raquo; зарегистрировано в&nbsp;Федеральной службе по&nbsp;надзору в&nbsp;сфере связи, информационны технологий и&nbsp;массовых коммуникаций (Роскомнадзор). Свидетельство о&nbsp;регистрации &#8470; ФС77-81240 от&nbsp;30&nbsp;июня 2021&nbsp;г.</div>
            <div class="footer__social-date">2021 © мма.рф</div>
            <ul>
                <li><a href="/"><img data-src="img/footer/vk.svg" alt="" class="lazy"></a></li>
                <li><a href="/"><img data-src="img/footer/tb.svg" alt="" class="lazy"></a></li>
                <li><a href="/"><img data-src="img/footer/fb.svg" alt="" class="lazy"></a></li>
                <li><a href="/"><img data-src="img/footer/insta.svg" alt="" class="lazy"></a></li>
            </ul>
        </div>
</footer>

	</div>

	<div class="fixed">
		<a href="#popup-reg" class="fixed__button button">Отправить заявку</a>
	</div>

	<div hidden>
		
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
		<div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Подать заявку</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Почта" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            <div class="form__item form__item_button"><button class="form__button button" type="submit">Подписаться</button></div>
        </div><!-- form__items -->
    </div>
</form>

</div>

<div class="popup-category" id="popup-category">
    <div class="popup-category__box">
        <div class="popup-category__head">
            <div class="popup-category__head-title">Категории бойцов</div>
            <a href="" class="popup-category__head-close">Отмена</a>
        </div>
        <div class="popup-category__body">
            <div class="popup-category__body-item active">P4P</div>
            <div class="popup-category__body-item active">Супертяжёлый</div>
            <div class="popup-category__body-item active">Тяжёлый</div>
            <div class="popup-category__body-item">Полутяжёлый</div>
            <div class="popup-category__body-item">Средний</div>
            <div class="popup-category__body-item">Лёгкий</div>
            <div class="popup-category__body-item">Полулёгкий</div>
            <div class="popup-category__body-item">Легчайший</div>
            <div class="popup-category__body-item">Наилегчайший</div>
            <div class="popup-category__body-item">Первый наилегчайший </div>
        </div>
        <a href="" class="popup-category__button">Преминить</a>
    </div>
</div>

<div class="broadcast-popup" id="broadcast" style="display: none;">
    <div class="broadcast-popup__top" id="sliderTop">
        <div data-index="0"><img src="img/broadcast-3/icon-1.jpeg" alt="" class=""></div>
        <div data-index="1"><img src="img/broadcast-3/icon-2.jpeg" alt="" class=""></div>
        <div data-index="2"><img src="img/broadcast-3/icon-3.jpeg" alt="" class=""></div>
        <div data-index="3"><img src="img/broadcast-3/icon-4.jpeg" alt="" class=""></div>
        <div data-index="4"><img src="img/broadcast-3/icon-5.jpeg" alt="" class=""></div>
        <div data-index="5"><img src="img/broadcast-3/icon-6.jpeg" alt="" class=""></div>
        <div data-index="6"><img src="img/broadcast-3/icon-7.jpeg" alt="" class=""></div>
        <div data-index="7"><img src="img/broadcast-3/icon-8.jpeg" alt="" class=""></div>
        <div data-index="8"><img src="img/broadcast-3/icon-9.jpeg" alt="" class=""></div>
        <div data-index="9"><img src="img/broadcast-3/icon-10.jpeg" alt="" class=""></div>
        <div data-index="10"><img src="img/broadcast-3/icon-11.jpeg" alt="" class=""></div>
    </div>
    <div class="broadcast-popup__bottom" id="sliderBottom">
        <div data-index="0"><img src="img/broadcast-3/icon-1.jpeg" alt="" class=""></div>
        <div data-index="1"><img src="img/broadcast-3/icon-2.jpeg" alt="" class=""></div>
        <div data-index="2"><img src="img/broadcast-3/icon-3.jpeg" alt="" class=""></div>
        <div data-index="3"><img src="img/broadcast-3/icon-4.jpeg" alt="" class=""></div>
        <div data-index="4"><img src="img/broadcast-3/icon-5.jpeg" alt="" class=""></div>
        <div data-index="5"><img src="img/broadcast-3/icon-6.jpeg" alt="" class=""></div>
        <div data-index="6"><img src="img/broadcast-3/icon-7.jpeg" alt="" class=""></div>
        <div data-index="7"><img src="img/broadcast-3/icon-8.jpeg" alt="" class=""></div>
        <div data-index="8"><img src="img/broadcast-3/icon-9.jpeg" alt="" class=""></div>
        <div data-index="9"><img src="img/broadcast-3/icon-10.jpeg" alt="" class=""></div>
        <div data-index="10"><img src="img/broadcast-3/icon-11.jpeg" alt="" class=""></div>
    </div>
</div>
		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="libs/jquery.formstyler.min.js"></script>
	<script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>
	<script src="js/script.js"></script>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-54CSRZ5');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54CSRZ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>
