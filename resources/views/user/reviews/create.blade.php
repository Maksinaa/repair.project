@extends('user.layouts.app')

@section('content')

@if (session('success'))
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          {{ session('success') }}
        </div>
      </div>
    </div>
  </div>
@endif

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Добавить отзыв
          </h3>

          <div class="card-body">
            <form action="{{ route('user.reviews.store') }}" method="post">
              @csrf

              @include('user.reviews.partials.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
