@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="nav-tabs">
    <div class="tab active">おすすめ</div>
    <a href="/?page=mylist" class="tab mylist">マイリスト</a>
</div>

<!-- 商品一覧 -->
<div class="product-contents">
    @foreach ($products as $product)
        <div class="product-content">
            <a href="{{ route('item.show', $product->id) }}" class="product-link"></a>
            <div class="img-container">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
            </div>
            <div class="detail-content">
                <p>{{$product->name}}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection