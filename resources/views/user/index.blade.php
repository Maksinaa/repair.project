@extends('user.layouts.app')

@section('content')
<div class="container">
    <!-- Услуги -->
    <div class="row mt-3">

      <div class="col-sm-4 mt-3">
        <div class="card">
          <img src="img/u-1.svg" height="200px" class="p-3" alt="...">
          <h4 class="card-header text-center border-top">Товары</h4>
          <div class="card-body">
            <p class="card-text">
              У нас Вы можете заказать практически любой товар на выбор, любой ценовой категории
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4 mt-3">
        <div class="card">
          <h4 class="card-header text-center">Ремонт</h4>
          <div class="card-body">
            <p class="card-text">
              Мы можем выполнить любой ремонт компьютерной и офисной техники
            </p>
          </div>
          <img src="img/u-2.svg" height="200px" class="p-3" alt="...">
        </div>
      </div>

      <div class="col-sm-4 mt-3">
        <div class="card">
          <img src="img/u-3.svg" height="200px" class="p-3" alt="...">
          <h4 class="card-header text-center border-top">Дополнительно</h4>
          <div class="card-body">
            <p class="card-text">
              Заправим картридж, напечатаем фотографии, выполним обслуживание и много другое ...
            </p>
          </div>
        </div>
      </div>

    </div>
    <!-- Услуги -->

    <!-- Офисы -->
    <div class="row mt-3">
    @forelse($offices as $office)
      <div class="col mt-3">
        <div class="card text-white bg-primary">
          <h4 class="card-header text-center">{{ $office->name }}</h4>
          @isset($office->map)
          <div>
          {!! $office->map !!}
            </div>
            @endisset
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <b>Адрес:</b>{{ $office->address }}
            </li>
            <li class="list-group-item">
            <b>График работы:</b>{{ $office->hours }}
            </li>
            @isset($office->phone)
            <li class="list-group-item">
            <b>Телефон:</b>{{ $office->phone }}
            </li>
            @endisset
            @isset($office->social)
            <li>
            <a href="{{ $office->social }}" class="list-group-item">
                <b>Мы в социальной сети:</b> {{ $office->social }}
            </a>
            </li>
            @endisset
          </ul>
        </div>
      </div>
        @empty
        @endforelse
    </div>
    <!-- Офисы -->

    <!-- Отзывы -->
    <div id="carouselExampleCaptions" class=" mt-3 carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
      @forelse($reviews as $review)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" @if ($loop->first) class="active"
          aria-current="true" @endif aria-label="Slide {{$loop->index}}"></button>
          @empty
        @endforelse
      </div>

      <div class="carousel-inner">
      @forelse($reviews as $review)

        <div class="carousel-item @if ($loop->first) active @endif">
        <img src="img/bg.svg" height="200px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>{{ $review->name ?? 'Неизвестный пользователь' }} в {{ $review->created_at }}</h5>
            <p>{{ $review->text }}</p>
            <p>{{ $review->rating }} из 5</p>
        </div>
        </div>
        @empty
        @endforelse
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
      </button>
    </div>
    <!-- Отзывы -->
</div>
@endsection
