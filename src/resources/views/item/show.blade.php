@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item/show.css') }}">
@endsection

@section('content')
<div class="all-contents">
        <!-- <form action="/item" method ="POST"> -->
            <! <div class="top-contents">
                <div class="left-content">
                    <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
                </div>
                <div class="right-content">
                 <div class="detail-content">
                   <p class="product-name">{{$product->name}}</p>
                   <a class="brand-name">ブランド名</a>
                 </div>
                  <div class="price-content">
                   <p>
                    <span class="currency">¥</span>
                    <span class="price">{{ number_format($product->price) }}</span>
                    <span class="tax">(税込)</span>
                   </p>
                   <div class="stats">
                    <span class="likes">
                    <a href="/item/{{ $product->id }}/like" class="button-like">
                     <button id="like-btn" data-product-id="{{ $product->id }}"    style="background:none; border:none;">
                    @if(Auth::check() && $product->isLikedBy(Auth::user()))
                      <img src="{{ asset('images/星アイコン8.png') }}" alt="Liked" class="icon liked" id="like-icon">
                      @else
                      <img src="{{ asset('images/星アイコン8.png') }}" alt="Not Liked" class="icon not-liked" id="like-icon">
                      @endif
                     </button>
                    <span id="like-count">{{ $product->likes_count }}</span>
                    </span>
                    </a>
                    <span class="comments">
                      <img src="{{ asset('images/ふきだしのアイコン.png') }}" alt="Comments" class="icon">
                      <span class="comments-count">{{ $product->comments_count }}</span>
                    </span>
                   </div>
                   <a href="{{ route('purchase.show', $product->id) }}">購入手続きへ</a>
                  </div>
                <input type="file" id="product_image" class="image" name="product_image">
                <label class="description-label">商品説明</label>
                <p class="product-description">{{$product->description}}</p>
                <label class="description-label">商品の情報</label>
                <p class="product-description">{{$product->description}}</p>
                <div class="button-content">
                    <button type="submit" class="button-change">コメントを送信する</button>
                </div>
              </div>  
            </div>
        </form>
    </div>
@endsection