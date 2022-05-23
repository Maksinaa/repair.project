@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Отзывы
            <a class="btn btn-sm btn-success float-end" id="new" href="{{ route('admin.reviews.create') }}">
              Добавить
            </a>
          </h3>
          <div class="card-body">
            <table class="table table-sm">
              <thead class="table-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col" class="text-end"></th>
                </tr>
              </thead>
              <tbody>
              {{-- @forelse($items as $item) --}}
                  <tr>
                    <td>
                        {{-- $item->id --}}
                    </td>
                    <td class="text-end">
                      <a class="btn btn-sm btn-primary" id="show" href="{{ route('admin.reviews.show', 1) }}">
                        Детали
                      </a>
                      <a class="btn btn-sm btn-secondary" id="edit" href="{{ route('admin.reviews.edit', 1) }}">
                        Редактировать
                      </a>&nbsp;
                      <form action="{{ route('admin.reviews.destroy', 1) }}" method="post" class="float-end">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" id="delete" type="submit">Удалить</button>
                      </form>
                    </td>
                  </tr>
                {{-- @empty --}}
                  <tr>
                    <td colspan="2">
                      <h3 class="text-center">Нет отзывов</h3>
                    </td>
                  </tr>
                {{--@endforelse--}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
