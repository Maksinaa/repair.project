@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Детали заявки
          </h3>

          <div class="card-body">
            <table class="table table-sm table-bordered">
              <thead class="table-dark">
                <tr>
                <th class="col-3">Атрибут</th>
                  <th class="col">Данные</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">ID</th>
                  <td>{{  $item->id  }}</td>
                </tr>
                <tr>
                  <th scope="row">Дата заявки</th>
                  <td>{{  $item->created_at  }}</td>
                </tr>
                <tr>
                  <th scope="row">Модель оборудования</th>
                  <td>{{  $item->model  }}</td>
                </tr>
                <tr>
                  <th scope="row">Описание неисправности</th>
                  <td>{{  $item->fault  }}</td>
                </tr>
                <tr>
                  <th scope="row">Ф.И.О. заказчика</th>
                  <td>{{  $item->customer  }}</td>
                </tr>
                <tr>
                  <th scope="row">Статус заявки</th>
                  <td>        @switch($item->status)
                    @case('repair')
                        Ремонт
                        @break

                    @case('approval')
                        Согласование
                        @break

                    @case('completion')
                        Ремонт завершен
                        @break

                @endswitch</td>
                </tr>
                <tr>
                  <th scope="row">Мастер</th>
                  <td>{{  $item->user->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Дата завершения ремонта</th>
                  <td>{{  $item->completion  }}</td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-secondary" id="edit" href="{{ route('admin.applications.edit' , $item->id) }}">
              Редактировать
            </a>
            <a class="btn btn-danger" id="cancel" href="{{ route('admin.applications.index') }}">
              Отмена
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
