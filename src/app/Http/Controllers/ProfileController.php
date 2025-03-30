<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // プロフィール設定画面を表示するメソッド
    public function update()
    {
        return view('profile-update');
    }
}
