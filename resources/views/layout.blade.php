<!DOCTYPE HTML>
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Тренировки.онлайн</title>

  <!-- Behavioral Meta Data -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon" type="image/png" href="img/small-logo-01.png">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

  <!--<a name="ancre"></a> <!--

  <!-- CACHE -->
  <!-- <div class="cache"></div>-->


  <!-- HEADER -->

  <!-- <div id="wrapper-header">
    <div id="main-header" class="object">-->
  <div id="wrapper-header" class="container-fluid py-3">
    <div class="row">
      <div class="col-lg-9">
        <div class="row">
          <div class="col-2 mb-4 d-xl-none d-lg-none d-xs-block">
            <div class="btn-group droprightmt-3">
              <a class="menu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/12.svg" alt="theme" title="VK" height="28" width="28">
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Бильярд</a>
                <a class="dropdown-item" href="#">Стойка</a>
                <a class="dropdown-item" href="#">Растяжка</a>
                <a class="dropdown-item" href="#">Теннис</a>
                <a class="dropdown-item" href="#">Гольф</a>
                <a class="dropdown-item" href="#">Бильярд</a>
                <a class="dropdown-item" href="#">Стойка</a>
                <a class="dropdown-item" href="#">Растяжка</a>
                <a class="dropdown-item" href="#">Теннис</a>
                <a class="dropdown-item" href="#">Гольф</a>
              </div>
            </div>
          </div>
          <div class="col-9 offset-lg-4 col-lg-7">
            <div class="logo">Тренировки.онлайн</div>
            <div id="main_tip_search">
            </div>
          </div>
          <div class="col-6 col-lg-1">
            <form>
              <input type="text" name="search" id="tip_search_input" placeholder="Искать уроки" list="search" autocomplete=off required>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- NAVBAR -->
  <div class="container-fluid bg-white pb-2">
    <div class="row">
      <div class="col-lg-1 col-5 offset-lg-3">
        <a href="/" class="top">
          <div class="top-rated">Уроки</div>
        </a>

      </div>
      <div class="col-lg-4 col-6">
        <a href="/contacts">
          <div class="top-rated">Контакты</div>
        </a>
      </div>
      <div class="col-lg-3 col-12 ml-4">
        <div class="row pt-3 pl-lg-5">
          <div class="col-1 pl-2 icon">
            <a class="" href="https://www.youtube.com/channel/UC5AmTcY1fmIi6FTVQtZrKZA"><img src="/img/yt-logo.jpg" alt="theme" title="Youtube" height="28" width="28"></a>
          </div>
          <div class="col-1 pl-2 icon">
            <a class="" href="https://vk.com/id10362180"><img src="/img/vk-logo.png" alt="theme" title="VK" height="28" width="28"></a>
          </div>
          <div class="col-1 pl-2 icon">
            <a class="icon" href="https://instagram.com"><img src="/img/insta-logo.png" alt="theme" title="Instagram" height="28" width="28"></a>
          </div>
          <div class="col-1 pl-2 icon">
            <a class="icon" href="https://telegram.com"><img src="/img/insta-logo.png" alt="theme" title="Telegram" height="28" width="28"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="/" class="">

  </a>
  <div class="container">
    @yield('content')
  </div>

  <div id="wrapper-copyright">
    <div class="copyright">
      <div class="copy-text object">2019 | Created by <a style="color:#D0D1D4;" href="https://vk.com/gasand">gasand</a></div>
    </div>
  </div>


  <!-- SCRIPT -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/main.min.js"></script>

</body>

</html>
