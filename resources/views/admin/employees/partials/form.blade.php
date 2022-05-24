<div class="mb-3">
  <label for="name" class="form-label">Ф.И.О сотрудника</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{-- $item->name ?? old('name') --}}"
    >
  @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="position" class="form-label">Должность</label>
  <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{-- $item->position ?? old('position') --}}"
    >
  @error('position')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="office_id" class="form-label">Офис</label>
  <select class="form-select @error('office_id') is-invalid @enderror" id="office_id" name="office_id">
    <option value="{{-- $item->office_id --}}">Название офиса</option>
  </select>
  @error('office_id')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="email" class="form-label">Адрес электронной почты</label>
  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{-- $item->email ?? old('email') --}}"
    >
  @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="password" class="form-label">Пароль</label>
  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{-- $item->password ?? old('password') --}}"
    >
  @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>


<hr>
<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.employees.index') }}">Отмена</a>
