@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item/show.css') }}">
@endsection

@section('content')
<div class="all-contents">
    <div class="top-contents">
        <div class="left-content">
            <div class="img-container">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
            </div>
        </div>
        <div class="right-content">
            <div class="detail-content">
                <h1 class="product-name">{{$product->name}}</h1>
                <p class="brand-name">ブランド名</p>
            </div>
            <div class="price-content">
                <p>
                    <span class="currency">¥</span>
                    <span class="price">{{ number_format($product->price) }}</span>
                    <span class="tax">(税込)</span>
                </p>
            </div>
            <div class="stats">
                <span class="likes">
                    <a href="/item/{{ $product->id }}/like" class="button-like">
                        <button id="like-btn" data-product-id="{{ $product->id }}" style="background:none; border:none;">
                            @if(Auth::check() && $product->isLikedBy(Auth::user()))
                                <img src="{{ asset('images/星アイコン8.png') }}" alt="Liked" class="icon liked" id="like-icon">
                            @else
                                <img src="{{ asset('images/星アイコン8.png') }}" alt="Not Liked" class="icon not-liked" id="like-icon">
                            @endif
                        </button>
                        <span id="like-count">{{ $product->likes_count }}</span>
                    </a>
                </span>
                <span class="comments">
                    <img src="{{ asset('images/ふきだしのアイコン.png') }}" alt="Comments" class="icon">
                    <span class="comments-count">{{ $product->comments_count }}</span>
                </span>
            </div>
            
            <div class="purchase-button">
                <a href="{{ route('purchase.show', $product->id) }}" class="button-purchase">購入手続きへ</a>
            </div>
            
            <div class="product-info">
                <h2 class="description-label">商品説明</h2>
                <p class="product-description">{{$product->description}}</p>
                
                <h2 class="description-label">商品の情報</h2>
                <div class="product-details">
                    <div class="detail-item">
                        <span class="detail-label">カラー：</span>
                        <span class="detail-value">グレー</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">状態：</span>
                        <span class="detail-value">新品</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-value">商品の状態は良好です。傷もありません。</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-value">購入後、即発送いたします。</span>
                    </div>
                </div>
                
                <h2 class="category-section">
                    <span class="category-label">カテゴリー</span>
                    <span class="category-tag">洋服</span>
                    <span class="category-tag">メンズ</span>
                </h2>
                
                <div class="condition-section">
                    <span class="condition-label">商品の状態</span>
                    <span class="condition-value">良好</span>
                </div>
            </div>
            
            <div class="comment-section">
                <h2 class="comment-title">コメント(1)</h2>
                <div class="comment-item">
                    <div class="comment-user">
                        <div class="user-avatar"></div>
                        <div class="user-name">admin</div>
                    </div>
                    <div class="comment-content">
                        ここにコメントが入ります。
                    </div>
                </div>
                
                <h2 class="comment-form-title">商品へのコメント</h2>
                <div class="comment-form">
                    <textarea class="comment-textarea" placeholder="コメントを入力してください"></textarea>
                    <div class="button-content">
                        <button type="submit" class="button-change">コメントを送信する</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection