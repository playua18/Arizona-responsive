<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="sender_viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sedona - Форма отзыва</title>
  <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content=/img/favicon"/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <style>
    body {
      opacity: 0;
      overflow-x: hidden;
    }

    html {
      background-color: #81b3d2;
    }
  </style>
</head>
<body class="inner-page">
<div class="preloader">
  <div class="pulse"></div>
</div>
<div class="page-wrapper">
  <header class="page-header">
    <div class="page-header__inner">
      <nav class="main-nav  main-nav--closed  main-nav--nojs">
        <div class="main-nav__inner">
          <ul class="row main-nav__list">
            <div class="main-nav__hamb--up"></div>
            <div class="main-nav__hamb--down"></div>
            <li class="col-12 col-md main-nav__item"><a href="/">Главная</a></li>
            <li class="col-12 col-md main-nav__item"><a href="media.html">Фото и видео</a></li>
            <li class="col-12 col-md main-nav__item main-nav__item--logo">
              <picture>
                <source media="(min-width: 1080px)" srcset="img/logotype-desktop.svg">
                <source media="(min-width: 768px)" srcset="img/logotype-tablet.svg">
                <img src="img/logotype-mobile.svg" alt="городок Седона">
              </picture>
            </li>
            <li class="col-12 col-md main-nav__item"><a href="send-form.html">Форма отзыва</a>
            </li>
            <li class="co l-12 col-md main-nav__item"><a class="hash-footer" href="#hash-footer">Контакты</a></li>
          </ul>

        </div>
        <a class="main-nav__toggle"></a>
      </nav>
      <div class="greating  greating-inner-page">
        <div class="greating__logo  animated  hinge">
          <img srcset="img/text-inner-page.svg 460w" sizes="(max-width: 767px) 272px, (min-width: 768px) 460px"
               alt="welcome to Sedona">
        </div>
      </div>
    </div>
  </header>
  <main class="inner-page">
    <section>

          <p>Send an e-mail with an attachment:</p>
          <form action="php/upload.php" method="post"
                enctype="multipart/form-data" name="form1">
            <p>Your name: <input type="text" name="fromname"></p>
            <p>Your e-mail: <input type="text" name="fromemail"></p>
            <p>Mod List: <textarea  name="question" maxlength="1000" cols="25" rows="6" name="modlist"></textarea>
            <p>File: <input type="file" name="file1"></p>
            <p>File: <input type="file" name="file2"></p>
            <p>File: <input type="file" name="file3"></p>
            <p>File: <input type="file" name="file4"></p>
            <p>File: <input type="file" name="file5"></p>
            <p>File: <input type="file" name="file6"></p>
            <p>File: <input type="file" name="file7"></p>
            <p>File: <input type="file" name="file8"></p>
            <p><input type="submit" name="Submit" value="Submit"></p>
          </form>

    </section>
  </main>
  <footer id="hash-footer" class="page-footer">
    <div class="row  page-footer__inner">
      <p class="col-12  col-md-4  page-footer__hashtag">
        <a href="#">#VISITSEDONA</a>
      </p>
      <p class="col-12  col-md-4  page-footer__social">
          <span class="social-list">
            <a class="social-link  btn" href=""><i class="fab fa-facebook" aria-hidden="true"></i></a>
            <a class="social-link  btn" href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <a class="social-link  btn" href=""><i class="fab fa-youtube" aria-hidden="true"></i></a>
          </span>
      </p>
      <p class="col-12  col-md-4  page-footer__copyright">
        <span>Design by</span>
        <a class="page-footer__btn  page-footer__copyright-link" href="https://htmlacademy.ru/">
          <svg id="htmlacademy-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.49 54.62" width="28px"
               height="40px">
            <g>
              <path d="M1.4,3.5,21.8,1.4,42.1,3.5V41L21.8,53,1.4,41Z" style="stroke-width: 2.7909998893737793px"/>
              <path d="M1.7,20.9,21.1,9.6,42,20.9v1.2L21.8,34,1.7,22.1Z" style="stroke-width: 2.056999921798706px"/>
              <polygon
                points="21.8 21.1 31.3 27 29.7 27.9 21.8 23.1 21.8 25.3 28 29 26.5 29.9 21.8 27.1 21.8 29 24.7 30.9 21.8 32.8 21.8 37.1 8.7 29.5 8.7 31.4 21.8 39.1 21.8 41.2 8.7 33.3 8.7 35.5 21.8 43.1 34.7 35.3 34.7 26.9 21.8 19 21.8 21.1"
                style=""/>
            </g>
          </svg>


        </a>
      </p>
    </div>
  </footer>
</div>
<div class="top" title="Наверх"><i class="fa fa-plane"></i></div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" href="css/libs.min.css">
<link rel="stylesheet" href="css/style.min.css"> <!-- в разработке использовать неминимизированный -->
<script src="js/libs.min.js"></script>
<script src="js/main.js"></script>  <!-- в разработке использовать неминимизированный -->
<script src="js/upload.js"></script>
</body>

</html>