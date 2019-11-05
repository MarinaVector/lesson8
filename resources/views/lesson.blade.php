@extends('layout')

@section('content')

<!-- PORTFOLIO -->

<div id="wrapper-container">

  <div class="container object">

    <div id="main-container-image">

      <div class="title-item">
        <div id="title-lesson">{{ $lesson->name }}</div>
      </div>

      <div class="title-item">
        <div id="video-yt">
          <div class="part-info-image-single embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4Yxs9Zh_Dr0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>


        <div class="title-item mt-2">
          <div id="title-description">{{ $lesson->description }}</div>
        </div>
        <hr>
        <div class="post-reply mb-2 ml-5">
          <div id="title-post-send">Комментарии</div>
          <hr>
          <div class="image-reply-post"></div>
          <div class="name-reply-post">Igor vlademir</div>
          <div class="text-reply-post">Awesome mockup, i like it very much ! It will help me for my website i was looking for since few days. Thank you a lot.</div>
        </div>

        <div class="post-send">
          <div id="main-post-send">
            <div class="my-3" id="title-post-send">Добавить комментарии</div>
            <form class="mb-3" id="contact" method="post" action="comment/">
              <fieldset>
                <p><textarea id="message" name="message" maxlength="500" placeholder="Пишите тут" tabindex="5" cols="30" rows="4"></textarea></p>
              </fieldset>
              <div class="post-send mt-4" style="text-align:center;"><input type="submit" name="envoi" value="Отправить" /></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="wrapper-thank">
  <div class="thank-text text-center">Дмитрий Сергеев</div>
</div>



@endsection
