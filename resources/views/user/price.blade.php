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
      @forelse($items as $item)
                  <tr>
                    <td>
                        {{$loop->iteration }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->note }}
                    </td>
                    <td>
                        {{ $item->price }}
                    </td>
                  </tr>
                 @empty
                  <tr>
                    <td colspan="4">
                      <h3 class="text-center">На текущий момент услуги отсутствуют</h3>
                    </td>
                  </tr>
                @endforelse
      </tbody>
    </table>
</div>
@endsection
