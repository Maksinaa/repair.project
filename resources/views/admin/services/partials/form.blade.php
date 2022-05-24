<div class="mb-3">
  <label for="number" class="form-label">Storage cell number</label>
  <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" value="{{-- $item->number ?? old('number') --}}"
    >
  @error('number')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="list" class="form-label">List</label>
  <textarea class="form-control @error('list') is-invalid @enderror" name="list" id="list"
    rows="5">
   {{-- $item->list ?? old('list') --}}
</textarea>
  @error('list')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="form-check mb-3">
  <input name="long_storage" type="hidden" value="0">
  <input type="checkbox" class="form-check-input" name="long_storage" id="long_storage" value="1"
  {{-- ($item->long_storage ?? old('long_storage')) == 1 ? 'checked' : '' --}}>
  <label class="form-check-label" for="long_storage">
    Long term storage
  </label>
</div>
<hr>
<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.services.index') }}">Отмена</a>
