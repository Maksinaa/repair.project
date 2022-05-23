@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Добавить офис
          </h3>

          <div class="card-body">
            <form action="{{ route('admin.details.store') }}" method="post">
              @csrf

              @include('admin.details.partials.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
