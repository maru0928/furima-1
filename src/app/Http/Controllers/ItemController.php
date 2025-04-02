<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Condition;

class ItemController extends Controller
{
    // コントローラーの例
public function index()
{
    // 製品のデータを取得
    $products = Product::all();  // ここで製品を取得する例

    // ビューに渡す
    return view('index', compact('products'));
}


    // 商品を表示するフォームを表示
    public function create()
    {
        $conditions = Condition::all(); 
        return view('item.create', compact('conditions')); // item.create ビューを表示
    }

    // 商品を保存する処理
    public function store(Request $request)
    {
        // バリデーション処理
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // 商品をデータベースに保存
        $item = new Item($validatedData); // Itemモデルを使用してデータベースに保存
        $item->save();
}
}