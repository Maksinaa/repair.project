<div class="mb-3">
  <label for="name" class="form-label">Название поля</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name ?? old('name') }}"
    >
  @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="value" class="form-label">Значение</label>
  <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" name="value" value="{{ $item->value ?? old('value') }}"
    >
  @error('value')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="description" class="form-label">Описание значения</label>
  <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
    rows="5">
    {{ $item->description ?? old('description') }}
</textarea>
  @error('description')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>


<hr>
<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.details.index') }}">Отмена</a>
