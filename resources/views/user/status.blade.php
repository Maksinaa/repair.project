@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="card mt-3">
      <img src="{{asset('img/repair.png')}}" class="card-img-top w-50" alt="...">
      <div class="card-body">
        <h5 class="card-title">Проверить статус ремонта</h5>
        <p class="card-text">Чтобы проверить статус ремонта введите семизначный номер с расписки о приеме на ремонт</p>
      </div>
    </div>

    <form class="mt-3" method="post" action="{{route('user.statusid')}}">
        @csrf
      <div class="input-group mb-3">
        <input type="number" name="id" class="form-control" placeholder="Введите номер с расписки" aria-label="Recipient's username"
          aria-describedby="button-addon2">
        <button class="btn btn-primary" type="submit" id="button-addon2">Проверить</button>
      </div>
    </form>

    @isset($item)
    <div class="card mt-3">
      <div class="card-header">Заказ № {{$item->id}}</div>
      <div class="card-body">
        <p class="card-text">
        @switch($item->status)
            @case('repair')
                Идет ремонт оборудования
                @break

            @case('approval')
                Требуется согласования по стоимости
                @break

            @case('completion')
                Ремонт завершен
                @break

        @endswitch
        </p>
      </div>
    </div>
  </div>
  @endisset()
@endsection
