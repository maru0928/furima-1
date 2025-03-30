<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
{
    return view('index');
}

    // 商品を表示するフォームを表示
    public function create()
    {
        return view('item.create');  // item.create ビューを表示
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