@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="card mt-3">
      <img src="img/repair.png" class="card-img-top w-50" alt="...">
      <div class="card-body">
        <h5 class="card-title">Проверить статус ремонта</h5>
        <p class="card-text">Чтобы проверить статус ремонта введите семизначный номер с расписки о приеме на ремонт</p>
      </div>
    </div>
    <form class="mt-3" action="">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Введите номер с расписки" aria-label="Recipient's username"
          aria-describedby="button-addon2">
        <button class="btn btn-primary" type="button" id="button-addon2">Проверить</button>
      </div>
    </form>
    <div class="card mt-3 text-white bg-success">
      <div class="card-header">Заказ № 1234567</div>
      <div class="card-body">
        <p class="card-text">Ремонт завершент</p>
      </div>
    </div>
  </div>
@endsection
