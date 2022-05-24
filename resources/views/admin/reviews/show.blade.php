@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Детали отзыва
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
                  <th scope="row">Имя</th>
                  <td>{{-- $item->name --}}</td>
                </tr>
                <tr>
                  <th scope="row">Текст отзыва</th>
                  <td>{{-- $item->text --}}</td>
                </tr>
                <tr>
                  <th scope="row">Дата отзыва</th>
                  <td>{{-- $item->date --}}</td>
                </tr>
                <tr>
                  <th scope="row">Оценка</th>
                  <td>{{-- $item->rating --}}</td>
                </tr>
                <tr>
                  <th scope="row">Адрес электронной почты</th>
                  <td>{{-- $item->email --}}</td>
                </tr>
                <tr>
                  <th scope="row">Статус отзыва</th>
                  <td>{{-- $item->status --}}</td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-secondary" id="edit" href="{{ route('admin.reviews.edit', 1) }}">
              Редактировать
            </a>
            <a class="btn btn-danger" id="cancel" href="{{ route('admin.reviews.index') }}">
              Отмена
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
