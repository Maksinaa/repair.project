@extends('admin.layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <h3 class="card-header">
            Detail
          </h3>

          <div class="card-body">
            <table class="table table-sm table-bordered">
              <thead class="table-dark">
                <tr>
                  <th class="col-2">Field</th>
                  <th class="col">Data</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">ID</th>
                  <td>{{ 1 }}</td>
                </tr>
              </tbody>
            </table>
            <a class="btn btn-secondary" id="edit" href="{{ route('admin.temp.edit', 1) }}">
              Edit
            </a>
            <a class="btn btn-danger" id="cancel" href="{{ route('admin.temp.index') }}">
              Cancel
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
