<div class="mb-3">
  <label for="name" class="form-label">Название офиса</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{-- $item->name ?? old('name') --}}"
    >
  @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="address" class="form-label">Адрес офиса</label>
  <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{-- $item->address ?? old('address') --}}"
    >
  @error('address')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="phone" class="form-label">Контактный телефон</label>
  <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{-- $item->phone ?? old('phone') --}}"
    >
  @error('phone')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="hours" class="form-label">Режим работы</label>
  <textarea class="form-control @error('hours') is-invalid @enderror" name="hours" id="hours"
    rows="5">
   {{-- $item->hours ?? old('hours') --}}
</textarea>
  @error('hours')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="social" class="form-label">Группа в социальных сетях</label>
  <input type="text" class="form-control @error('social') is-invalid @enderror" id="social" name="social" value="{{-- $item->social ?? old('social') --}}"
    >
  @error('social')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="map" class="form-label">Ссылка на онлайн карту</label>
  <input type="text" class="form-control @error('map') is-invalid @enderror" id="map" name="map" value="{{-- $item->map ?? old('map') --}}"
    >
  @error('map')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<hr>
<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.offices.index') }}">Отмена</a>
