<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // プロフィール設定画面を表示するメソッド
    public function update()
    {
        return view('profile-update');
    }

    public function editAddress($id)
{
    $product = Product::findOrFail($id);
    $user = Auth::user();
    return view('address-update', compact('product', 'user'));
}
}
