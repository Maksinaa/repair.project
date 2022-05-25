@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Детали услуги
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
                  <td>{{ $item->id }}</td>
                </tr>
                <tr>
                  <th scope="row">Название услуги</th>
                  <td>{{ $item->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Цена</th>
                  <td>{{ $item->price }}</td>
                </tr>
                <tr>
                  <th scope="row">Примечание</th>
                  <td>{{ $item->note }}</td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-secondary" id="edit" href="{{ route('admin.services.edit', $item->id) }}">
              Редактировать
            </a>
            <a class="btn btn-danger" id="cancel" href="{{ route('admin.services.index') }}">
              Отмена
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
