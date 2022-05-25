@extends('user.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Отзывы
            <a class="btn btn-sm btn-success float-end" id="new" href="{{ route('user.reviews.create') }}">
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
              {{ @forelse($items as $item) }}
                  <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td class="text-end">
                      <a class="btn btn-sm btn-primary" id="show" href="{{ route('user.reviews.show', $item->id) }}">
                        Детали
                      </a>
                      <a class="btn btn-sm btn-secondary" id="edit" href="{{ route('user.reviews.edit', $item->id) }}">
                        Редактировать
                      </a>&nbsp;
                      <form action="{{ route('user.reviews.destroy', $item->id) }}" method="post" class="float-end">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" id="delete" type="submit">Удалить</button>
                      </form>
                    </td>
                  </tr>
                {{ @empty }}
                  <tr>
                    <td colspan="2">
                      <h3 class="text-center">Нет отзывов</h3>
                    </td>
                  </tr>
                {{@endforelse}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
