@extends('layout')

@section('content')
<!-- PORTFOLIO -->


<div class="container-fluid mb-5">
  <div class="row myrow">
    <div class="col-lg-4 col-md-12 col-12 mt-4">
      <div class="list-group list-group-flush d-none d-lg-block">
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="Стойка со штангой">Стойка со штангой</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Попадание в лузу</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list">Футбол как не уставать</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Прокачка мышц</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Быстрые тренировки</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Подготовка к соревнованиям</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Все для растяжки</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Удары в бильярде</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Теннис</h5>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <h5 class="list-group-item-heading">Броски</h5>
        </a>
      </div>
    </div>

    <div class="col-lg-8 col-12" id="main-container-image">
      <div class="row row-card">

        @foreach($lessons as $lesson)

        <div class="col-lg-6 col-md-12 mb-3 work">
          <figure class="white">
            <a href="lesson/{{ $lesson->id }}">
              <img src="img/yt-logo.jpg" alt="{{ $lesson->name }}" />
              <dl>
                <dd>{{ mb_strimwidth($lesson->created_at, 0, 16) }}</dd>
                <dt>{{ mb_strimwidth($lesson->description, 0, 140, '...') }}</dt>
              </dl>
            </a>
            <div id="wrapper-part-info">
              <div id="part-info">{{ $lesson->name }}</div>
            </div>
          </figure>
        </div>

        @endforeach

      </div>
    </div>
  </div>
</div>

<div id="wrapper-thank">
  <div class="thank-text text-center">Дмитрий Сергеев</div>
</div>

@endsection
