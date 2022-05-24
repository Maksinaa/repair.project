@extends('user.layouts.app')

@section('content')
<div class="container">
<table class="table table-striped mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Услуги</th>
          <th scope="col">Примечание</th>
          <th scope="col">Цена</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Просто посмотреть</td>
          <td>любой вид устройств</td>
          <td>1 000 р.</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Диагностика неисправности</td>
          <td>любой вид устройств</td>
          <td>700 р.</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Оно само сломалось</td>
          <td>1 200 р.</td>
        </tr>
      </tbody>
    </table>
</div>
@endsection
