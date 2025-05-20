<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '腕時計',
                'price' => '15000',
                'image' => '/images/Armani+Mens+Clock.jpg',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'condition'  => '良好',
                'category' => '時計'
            ],
            [
                'name' => 'HDD',
                'price' => '5000',
                'image' => '/images/HDD+Hard+Disk.jpg',
                'description' => '高速で信頼性の高いハードディスク',
                'condition'  => '目立った傷や汚れなし',
                'category' => 'PCパーツ'
            ],
            [
                'name' => '玉ねぎ３束',
                'price' => '300',
                'image' => '/images/iLoveIMG+d.jpg',
                'description' => '新鮮な玉ねぎ3束のセット',
                'condition'  => 'やや傷や汚れあり',
                'category' => '食材'
            ],
            [
                'name' => '革靴',
                'price' => '4000',
                'image' => '/images/Leather+Shoes+Product+Photo.jpg',
                'description' => 'クラシックなデザインの革靴',
                'condition'  => '状態が悪い',
                'category' => 'ファッション'
            
            ],
            [
                'name' => 'ノートPC',
                'price' => '45000',
                'image' => '/images/Living+Room+Laptop.jpg',
                'description' => '高性能なノートパソコン',
                'condition'  => '良好',
                'category' => 'PC'
            ],
            [
                'name' => 'マイク',
                'price' => '8000',
                'image' => '/images/Music+Mic+4632231.jpg',
                'description' => '高音質のレコーディング用マイク',
                'condition'  => '目立った傷や汚れなし',
                'category' => '音楽'
            ],
            [
                'name' => 'ショルダーバッグ',
                'price' => '3500',
                'image' => '/images/Purse+fashion+pocket.jpg',
                'description' => 'おしゃれなショルダーバッグ',
                'condition'  => 'やや傷や汚れあり',
                'category' => 'ファッション'
            ],
            [
                'name' => 'タンブラー',
                'price' => '500',
                'image' => '/images/Tumbler+souvenir.jpg',
                'description' => '使いやすいタンブラー',
                'condition'  => '状態が悪い',
                'category' => 'キッチン'
            ],
            [
                'name' => 'コーヒーミル',
                'price' => '4000',
                'image' => '/images/Waitress+with+Coffee+Grinder.jpg',
                'description' => '手動のコーヒーミル',
                'condition'  => '良好',
                'category' => 'キッチン'
            ],
            [
                'name' => 'メイクセット',
                'price' => '2500',
                'image' => '/images/外出メイクアップセット.jpg',
                'description' => '便利なメイクアップセット',
                'condition'  => '目立った傷や汚れなし',
                'category' => 'ビューティー'
            ],
        ]);
    }
}