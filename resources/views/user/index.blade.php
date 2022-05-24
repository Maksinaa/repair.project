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

      <div class="col-sm-6 mt-3">
        <div class="card text-white bg-primary">
          <h4 class="card-header text-center">пгт. Оршанка</h4>
          <img src="img/1.png" alt="...">
          <div class="card-body"></div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <b>Адрес:</b> 425250, Республика Марий Эл, пгт. Оршанка, ул. Советская ул. д. 126, 2-й этаж.
            </li>
            <li class="list-group-item">
              <b>График работы:</b> понедельник – пятница с 8.30 до 17.00, обед с 12.00 до 13.00; суббота с 8.30 до
              13.00.
            </li>
            <li class="list-group-item">
              <b>Телефон:</b> +7 (902) 744 98 97
            </li>
          </ul>
        </div>
      </div>

      <div class="col-sm-6 mt-3">
        <div class="card text-white bg-primary">
          <h4 class="card-header text-center">пгт. Юрино</h4>
          <img src="img/2.png" alt="...">
          <div class="card-body"></div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <b>Адрес:</b> 425370, Республика Марий Эл, пгт. Юрино, Центральный проспект, д. 11а.
            </li>
            <li class="list-group-item">
              <b>График работы:</b> понедельник – пятница с 8.00 до 17.00, обед с 12.00 до 13.00, суббота, воскресенье
              выходной
            </li>
            <li class="list-group-item">
              <b>Телефон:</b> +7 (995) 961 44 84
            </li>
          </ul>

        </div>
      </div>

    </div>
    <!-- Офисы -->

    <!-- Отзывы -->
    <div id="carouselExampleCaptions" class=" mt-3 carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/bg.svg" height="200px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Василий1</h5>
            <p>Молодец, все отлично починил</p>
            <p>Оценка 5 из 5</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bg.svg" height="200px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Василий2</h5>
            <p>Молодец, все отлично починил</p>
            <p>Оценка 5 из 5</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bg.svg" height="200px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Василий3</h5>
            <p>Молодец, все отлично починил</p>
            <p>Оценка 5 из 5</p>
          </div>
        </div>
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
