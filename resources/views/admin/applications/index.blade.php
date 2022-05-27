@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Заявки
            <a class="btn btn-sm btn-success float-end" id="new" href="{{ route('admin.applications.create') }}">
              Добавить
            </a>
          </h3>
          <div class="card-body">
            <table class="table table-sm">
              <thead class="table-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Дата заявки</th>
                  <th scope="col">Модель оборудования</th>
                  <th scope="col">Статус заявки</th>
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
                        {{  $item->created_at  }}
                    </td>
                    <td>
                        {{  $item->model  }}
                    </td>
                    <td>
                                @switch($item->status)
                        @case('repair')
                            Ремонт
                            @break

                        @case('approval')
                            Согласование
                            @break

                        @case('completion')
                            Ремонт завершен
                            @break

                    @endswitch
                    </td>
                    <td class="text-end">
                      <a class="btn btn-sm btn-primary" id="show" href="{{ route('admin.applications.show' , $item->id) }}">
                        Детали
                      </a>
                      <a class="btn btn-sm btn-secondary" id="edit" href="{{ route('admin.applications.edit' , $item->id) }}">
                        Редактировать
                      </a>&nbsp;
                      <form action="{{ route('admin.applications.destroy' , $item->id) }}" method="post" class="float-end">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" id="delete" type="submit">Удалить</button>
                      </form>
                    </td>
                  </tr>
                 @empty
                  <tr>
                    <td colspan="5">
                      <h3 class="text-center">Нет заявок</h3>
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
