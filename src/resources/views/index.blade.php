@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="all-contents">
  <div class="left-contents">
      <p>おすすめ</p>
      <a href="/?page=mylist"><div>マイリスト</div></a>
  </div>
  @foreach ($products as $product)
    <div class="product-content">
      <a href="/products/detail/{{$product->id}}" class="product-link"></a>
      <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
      <div class="detail-content">
        <p>{{$product->name}}</p>
      </div>
    </div>
  @endforeach
</div>
@endsection
