@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item/create.css') }}">
@endsection

@section('content')
<div class="create-form__content">
  <div class="create-form__heading">
    <h1>商品の出品</h1>
  </div>
  <form class="form" action="{{ route('item.store') }}" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <label for="image" class="form__label--item">商品画像</label>
      </div>
      <div class="form__group-content">
        <div class="form__input--file">
          <input type="file" id="image" name="image" accept="image/*" />
          <label for="image" class="custom-file-label">画像を選択する</label>
        </div>
        <div class="form__error">
          @error('image')
          <span>{{ $message }}</span>
          @enderror
        </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">商品名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">ブランド名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="brand" value="{{ old('brand') }}" />
        </div>
        <div class="form__error">
          @error('brand')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">商品の説明</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <textarea name="description">{{ old('description') }}</textarea>
        </div>
        <div class="form__error">
          @error('description')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">販売価格</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text price-input">
          <span class="currency-symbol">¥</span>
          <input id="price" type="number" name="price" value="{{ old('price') }}" min="1" />
        </div>
        <div class="form__error">
          @error('price')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form_listing_button">
      <button class="form_listing_button-submit" type="submit">出品する</button>
    </div>
  </form>
</div>
@endsection