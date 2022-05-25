@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Редактировать отзыв
          </h3>

          <div class="card-body">
            <form action="{{ route('admin.reviews.update', $item->id) }}" method="post">
              @csrf
              @method('put')

              @include('admin.reviews.partials.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
