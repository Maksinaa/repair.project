@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Офисы
            <a class="btn btn-sm btn-success float-end" id="new" href="{{ route('admin.offices.create') }}">
              Добавить
            </a>
          </h3>
          <div class="card-body">
            <table class="table table-sm">
              <thead class="table-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Название офиса</th>
                  <th scope="col" class="text-end"></th>
                </tr>
              </thead>
              <tbody>
               @forelse($items as $item)
                  <tr>
                    <td>
                        {{  $item->id  }}
                    </td>
                    <td>
                        {{  $item->name  }}
                    </td>
                    <td class="text-end">
                      <a class="btn btn-sm btn-primary" id="show" href="{{ route('admin.offices.show', $item->id ) }}">
                        Детали
                      </a>
                      <a class="btn btn-sm btn-secondary" id="edit" href="{{ route('admin.offices.edit', $item->id ) }}">
                        Редактировать
                      </a>&nbsp;
                      <form action="{{ route('admin.offices.destroy', $item->id ) }}" method="post" class="float-end">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" id="delete" type="submit">Удалить</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="3">
                      <h3 class="text-center">Нет офисов</h3>
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
