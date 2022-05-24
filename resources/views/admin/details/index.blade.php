@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Реквизиты
            <a class="btn btn-sm btn-success float-end" id="new" href="{{ route('admin.details.create') }}">
              Добавить
            </a>
          </h3>
          <div class="card-body">
            <table class="table table-sm">
              <thead class="table-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Название поля</th>
                  <th scope="col">Значение</th>
                  <th scope="col">Описание значения</th>
                  <th scope="col" class="text-end"></th>
                </tr>
              </thead>
              <tbody>
              {{-- @forelse($items as $item) --}}
                  <tr>
                    <td>
                        {{-- $item->id --}}
                    </td>
                    <td>
                        {{-- $item->name --}}
                    </td>
                    <td>
                        {{-- $item->value --}}
                    </td>
                    <td>
                        {{-- $item->description --}}
                    </td>
                    <td class="text-end">
                      <a class="btn btn-sm btn-primary" id="show" href="{{ route('admin.details.show', 1) }}">
                        Детали
                      </a>
                      <a class="btn btn-sm btn-secondary" id="edit" href="{{ route('admin.details.edit', 1) }}">
                        Редактировать
                      </a>&nbsp;
                      <form action="{{ route('admin.details.destroy', 1) }}" method="post" class="float-end">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" id="delete" type="submit">Удалить</button>
                      </form>
                    </td>
                  </tr>
                {{-- @empty --}}
                  <tr>
                    <td colspan="5">
                      <h3 class="text-center">Нет реквизитов</h3>
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
