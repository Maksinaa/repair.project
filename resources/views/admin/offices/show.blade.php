@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Детали офиса
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
                  <th scope="row">Название офиса</th>
                  <td>{{  $item->name  }}</td>
                </tr>
                <tr>
                  <th scope="row">Адрес офиса</th>
                  <td>{{  $item->address  }}</td>
                </tr>
                <tr>
                  <th scope="row">Контактный телефон</th>
                  <td>{{  $item->phone  }}</td>
                </tr>
                <tr>
                  <th scope="row">Режим работы</th>
                  <td>{{  $item->hours  }}</td>
                </tr>
                <tr>
                  <th scope="row">Группа в социальных сетях</th>
                  <td>{{  $item->social  }}</td>
                </tr>
                <tr>
                  <th scope="row">Ссылка на онлайн карту</th>
                  <td>{{  $item->map  }}</td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-secondary" id="edit" href="{{ route('admin.offices.edit', $item->id ) }}">
              Редактировать
            </a>
            <a class="btn btn-danger" id="cancel" href="{{ route('admin.offices.index') }}">
              Отмена
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
