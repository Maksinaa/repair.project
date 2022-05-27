<div class="mb-3">
  <label for="date" class="form-label">Дата заявки</label>
  <input type="text" class="form-control @error('date') is-invalid @enderror" value="{{ $item->created_at ?? '' }}"
    disabled>
  @error('date')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="model" class="form-label">Модель оборудования</label>
  <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model"
    value="{{ $item->model ?? old('model') }}">
  @error('model')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="fault" class="form-label">Описание неисправности</label>
  <textarea class="form-control @error('fault') is-invalid @enderror" name="fault" id="fault"
    rows="5">{{ $item->fault ?? old('fault') }}</textarea>
  @error('fault')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="customer" class="form-label">Ф.И.О. заказчика</label>
  <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" name="customer"
    value="{{ $item->customer ?? old('customer') }}">
  @error('customer')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="status" class="form-label">Статус заявки</label>
  <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
    <option value="repair" {{ ($item->status ?? old('status')) == 'repair' ? 'selected' : '' }}>
      Ремонт</option>
    <option value="approval" {{ ($item->status ?? old('status')) == 'approval' ? 'selected' : '' }}>Согласование
    </option>
    <option value="completion" {{ ($item->status ?? old('status')) == 'completion' ? 'selected' : '' }}>
      Выполнено</option>
  </select>
  @error('status')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="user_id" class="form-label">Мастер</label>
  <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
    @forelse($masters as $master)
      <option value="{{ $master->id }}" {{ ($item->user_id ?? old('user_id')) == $master->id ? 'selected' : '' }}>
        {{ $master->name }}</option>
    @empty
    @endforelse
  </select>
  @error('user_id')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="completion" class="form-label">Дата завершения ремонта</label>
  <input type="date" class="form-control @error('completion') is-invalid @enderror" id="completion" name="completion"
    value="{{ $item->completion ?? old('completion') }}">
  @error('completion')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<hr>
<button type="submit" id="save" class="btn btn-primary">
  Сохранить
</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.applications.index') }}">
  Отмена
</a>
