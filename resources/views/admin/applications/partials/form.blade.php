<div class="mb-3">
  <label for="date" class="form-label">Дата заявки</label>
  <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{-- $item->date ?? old('date') --}}"
    >
  @error('date')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="model" class="form-label">Модель оборудования</label>
  <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{-- $item->model ?? old('model') --}}"
    >
  @error('model')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="fault" class="form-label">Описание неисправности</label>
  <textarea class="form-control @error('fault') is-invalid @enderror" name="fault" id="fault"
    rows="5"> {{-- $item->fault ?? old('fault') --}}
</textarea>
  @error('fault')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="customer" class="form-label">Ф.И.О. заказчика</label>
  <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" name="customer" value="{{-- $item->customer ?? old('customer') --}}"
    >
  @error('customer')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="status" class="form-label">Статус заявки</label>
  <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
    <option value="{{-- $item->status --}}">Ремонт</option>
    <option value="{{-- $item->status --}}">Согласованно</option>
    <option value="{{-- $item->status --}}">Выполненно</option>
  </select>
  @error('status')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>
<div class="mb-3">
  <label for="master" class="form-label">Мастер</label>
  <select class="form-select @error('master') is-invalid @enderror" id="master" name="master">
    <option value="{{-- $item->master --}}">Ф.И.О мастера</option>
  </select>
  @error('master')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="completion" class="form-label">Дата завершения ремонта</label>
  <input type="date" class="form-control @error('completion') is-invalid @enderror" id="completion" name="completion" value="{{-- $item->completion ?? old('completion') --}}"
    >
  @error('completion')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<hr>
<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.applications.index') }}">Отмена</a>
