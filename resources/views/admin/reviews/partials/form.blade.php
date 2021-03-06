<div class="mb-3">
  <label for="name" class="form-label">Имя</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name ?? old('name') }}"
    >
  @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="text" class="form-label">Текст отзыва</label>
  <textarea class="form-control @error('text') is-invalid @enderror" name="text" id="text"
    rows="5">
    {{ $item->text ?? old('text') }}
</textarea>
  @error('text')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="date" class="form-label">Дата отзыва</label>
  <input type="text" class="form-control" value="{{ $item->created_at ?? '' }}" disabled>
</div>

<div class="mb-3">
  <label for="rating" class="form-label">Оценка</label>
  <input type="number" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" value="{{ $item->rating ?? old('rating') }}"
    >
  @error('rating')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="email" class="form-label">Адрес электронной почты</label>
  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $item->email ?? old('email') }}"
    >
  @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="mb-3">
  <label for="status" class="form-label">Статус отзыва</label>
  <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
    <option value="moderation" {{ ($item->status ?? old('status')) == 'moderation' ? 'selected' : '' }}>
      Ожидает модерации
    </option>
    <option value="published" {{ ($item->status ?? old('status')) == 'published' ? 'selected' : '' }}>
      Опубликовано
    </option>
    <option value="denied" {{ ($item->status ?? old('status')) == 'denied' ? 'selected' : '' }}>
      Отказано в публикации
    </option>
  </select>
  @error('status')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>

<hr>
<button type="submit" id="save" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" id="cancel" href="{{ route('admin.reviews.index') }}">Отмена</a>
