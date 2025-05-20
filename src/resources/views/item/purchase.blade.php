@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item/purchase.css') }}">
@endsection

@section('content')
<div class="all-contents">
        <form action="/item.show" method="POST" class="left-content" id="purchase-form">
        @csrf
            <div class="content-wrapper">
            <div class="left-content">
            <div class="product-container">
            <div class="image-box">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
            </div>
                <div class="text-box">
                   <p class="product-name">{{$product->name}}</p>
                   <p class="price-content">
                    <span class="currency">¥</span>
                    <span class="price">{{ number_format($product->price) }}</span>
                   </p>
                </div>
            </div>
                <div class="separator-line"></div>
                <div class="payment-section">
                  <p class="payment-title">支払い方法</p>
                   <select name="payment_method" class="payment-select" id="payment-method">
                    <option value="" disabled selected>選択してください</option>
                    <option value="convenience_store">コンビニ払い</option>
                    <option value="credit_card">カード支払い</option>
                   </select>
                </div>
                <div class="separator-line second-line"></div>
                <div class="shipping-section">
                  <p class="shipping-title">配送先</p>
                  <div class="shipping-info">
                   <span class="address-text">{{ $user->address ?? '住所が設定されていません' }}</span>
                  <a href="{{ url('/purchase/address/' . $product->id) }}" class="change-link" >変更する </a>
                </div>
            </div>
        </div>
            <div class="summary-box">
            <table class="summary-table">
              <tr>
               <td>商品代金</td>
               <td>¥{{ number_format($product->price) }}</td>
              </tr>
              <tr>
               <td>支払い方法</td>
               <td id="payment-summary">未選択</td>
              </tr>
            </table>
            </div>
    <button type="submit" class="purchase-button">購入する</button>
        </form>
</div>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const paymentSelect = document.getElementById('payment-method');
        const paymentSummary = document.getElementById('payment-summary');

        paymentSelect.addEventListener('change', function () {
            const value = this.value;
            let text = '未選択';
            if (value === 'convenience_store') {
                text = 'コンビニ払い';
            } else if (value === 'credit_card') {
                text = 'カード支払い';
            }
            paymentSummary.textContent = text;
        });
    });
</script>
@endsection