<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_id',);
    }

    public function likes()
    {
    return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    $product = Product::withCount('likes')->find($id);

    }

    public function isLikedBy($user)
    {
    return $this->likes()->where('user_id', $user->id)->exists();
    }

}