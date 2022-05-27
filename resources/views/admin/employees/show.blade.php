@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Детали сотрудника
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
                  <td>{{ $item->id}}</td>
                </tr>
                <tr>
                  <th scope="row">Ф.И.О сотрудника</th>
                  <td>{{$item->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Должность</th>
                  <td>@switch($item->position)
                    @case('administrator')
                    Администратор
                        @break

                    @case('master')
                    Мастер
                        @break

                    @case('consultant')
                    Консультант
                        @break

                @endswitch
            </td>
                </tr>
                <tr>
                  <th scope="row">ID офиса</th>
                  <td>{{ $item->office->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Адрес электронной почты</th>
                  <td>{{ $item->email }}</td>
                </tr>
               </tbody>
            </table>
            <a class="btn btn-secondary" id="edit" href="{{ route('admin.employees.edit', $item->id) }}">
              Редактировать
            </a>
            <a class="btn btn-danger" id="cancel" href="{{ route('admin.employees.index') }}">
              Отмена
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
