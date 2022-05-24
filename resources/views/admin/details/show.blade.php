@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Детали реквизитов
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
                  <td>{{-- $item->id --}}</td>
                </tr>
                <tr>
                  <th scope="row">Название поля</th>
                  <td>{{-- $item->name --}}</td>
                </tr>
                <tr>
                  <th scope="row">Значение</th>
                  <td>{{-- $item->value --}}</td>
                </tr>
                <tr>
                  <th scope="row">Описание значения</th>
                  <td>{{-- $item->description --}}</td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-secondary" id="edit" href="{{ route('admin.details.edit', 1) }}">
              Редактировать
            </a>
            <a class="btn btn-danger" id="cancel" href="{{ route('admin.details.index') }}">
              Отмена
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
