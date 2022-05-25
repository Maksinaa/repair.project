<div class="mb-3">
  <label for="name" class="form-label">Имя</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
    value="{{ $item->name ?? old('name') }}">
  @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="email" class="form-label">Адрес электронной почты</label>
  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
    value="{{ $item->email ?? old('email') }}">
  @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="text" class="form-label">Текст отзыва</label>
  <textarea class="form-control @error('text') is-invalid @enderror" name="text" id="text"
    rows="5" required>{{ $item->text ?? old('text') }}</textarea>
  @error('text')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="rating" class="form-label">Оцените качество работы</label>
  <input type="range" class="form-range @error('rating') is-invalid @enderror" id="rating" name="rating" min="1" max="5"
    step="1" value="{{ $item->rating ?? old('rating') }}">
  <div class="form-text">
    <span class="float-start badge bg-danger p-2">плохо</span>
    <span class="float-end badge bg-success p-2">отлично</span>
  </div>
  @error('rating')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>
<br>
<div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Согласен с правилами</label>
</div>



<hr>
<button type="submit" id="save" class="btn btn-primary">
  Отправить отзыв
</button>
