<div class="mb-3">
  <label for="name" class="form-label">Название услуги</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name ?? old('name') }}"
    >
  @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="price" class="form-label">Цена</label>
  <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $item->price ?? old('price') }}" min="0">
  @error('price')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="note" class="form-label">Примечание</label>
  <textarea class="form-control @error('note') is-invalid @enderror" name="note" id="note"
    rows="5">
   {{ $item->note ?? old('note') }}
</textarea>
  @error('note')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<hr>
<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.services.index') }}">Отмена</a>
