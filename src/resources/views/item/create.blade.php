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
        <span class="form__label--item">商品の状態</span>
      </div>
      <div class="create-form__select-inner">
          <select class="create-form__select" name="condition_id">
            <option disabled selected>選択してください</option>
            @foreach($conditions as $condition)
            <option value="{{ $condition->id }}" {{ old('condition_id')==$condition->id ? 'selected' : '' }}>{{
              $condition->content }}</option>
            @endforeach
          </select>
        </div>
        <p class="create-form__error-message">
          @error('category_id')
          {{ $message }}
          @enderror
        </p>
    <!-- 商品の詳細 -->
            <div class="form-section">
                <h2 class="section-title">商品の詳細</h2>
                <div class="section-divider"></div>

                <!-- カテゴリー -->
                <div class="form-group">
                    <h3 class="form-label">カテゴリー</h3>
                    <div class="category-buttons">
                        <div class="category-row">
                            @foreach(['ファッション', '家電', 'インテリア', 'レディース', 'メンズ', 'コスメ'] as $category)
                                <label class="category-label">
                                    <input type="radio" name="category" value="{{ $category }}" class="category-input">
                                    <span class="category-button">{{ $category }}</span>
                                </label>
                            @endforeach
                        </div>
                        <div class="category-row">
                            @foreach(['本', 'ゲーム', 'スポーツ', 'キッチン', 'ハンドメイド', 'アクセサリー'] as $category)
                                <label class="category-label">
                                    <input type="radio" name="category" value="{{ $category }}" class="category-input">
                                    <span class="category-button">{{ $category }}</span>
                                </label>
                            @endforeach
                        </div>
                        <div class="category-row">
                            @foreach(['おもちゃ', 'ベビー・キッズ'] as $category)
                                <label class="category-label">
                                    <input type="radio" name="category" value="{{ $category }}" class="category-input">
                                    <span class="category-button">{{ $category }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>

            <!-- 商品名と説明 -->
            <div class="form-section">
                <h2 class="section-title">商品名と説明</h2>
                <div class="section-divider"></div>

                <!-- 商品名 -->
                <div class="form-group">
                    <h3 class="form-label">商品名</h3>
                    <input type="text" name="name" class="form-input">
                </div>

                <!-- ブランド名 -->
                <div class="form-group">
                    <h3 class="form-label">ブランド名</h3>
                    <input type="text" name="brand" class="form-input">
                </div>

                <!-- 商品の説明 -->
                <div class="form-group">
                    <h3 class="form-label">商品の説明</h3>
                    <textarea name="description" class="form-textarea"></textarea>
                </div>

                <div class="form-group">
                    <h3 class="form-label">販売価格</h3>
                    <div class="price-input-container">
                        <span class="currency-symbol">¥</span>
                        <input type="text" name="price" class="form-input price-input">
                    </div>
                </div>

    <div class="form_listing_button">
      <button class="form_listing_button-submit" type="submit">出品する</button>
    </div>
  </form>
</div>
@endsection