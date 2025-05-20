<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Condition;
use App\Models\Like;

class ItemController extends Controller
{
public function index()
{
    // 製品のデータを取得
    $products = Product::all();

    return view('index', compact('products'));
}

    public function create(Request $request)
{
        $conditions = Condition::all();
        return view('item.create', compact('conditions')); // item.create ビューを表示
        
    }

public function store(Request $request)
    {
        
    }

    public function showItem($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('item.show', compact('product'));
    }

    public function toggleLike(Product $product, Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $like = Like::where('user_id', $user->id)
                    ->where('product_id', $product->id)
                    ->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            Like::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
            ]);
            $liked = true;
        }

        $product->loadCount('likes');
        return redirect()->route('item.show', ['product' => $product->id]);
    }

    public function postComment(Request $request, $productId)
    {
        return redirect()->route('item.show', ['product' => $productId]);
    }

    public function showPurchase(Product $product)
    {
        return view('item.purchase', compact('product'));
    }
}