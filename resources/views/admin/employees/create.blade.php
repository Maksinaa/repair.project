@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Добавить сотрудника
          </h3>

          <div class="card-body">
            <form action="{{ route('admin.employees.store') }}" method="post">
              @csrf

              @include('admin.employees.partials.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
