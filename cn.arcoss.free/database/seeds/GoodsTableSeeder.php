<?php

use App\Goods;
use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goods')->delete();

        Goods::create([
        	'category' => 12,
        	'brand' => 1,
        	'goods_name' => 'TP-LINK TL-WN725N 微型150M无线USB网卡',
        	'marking_price' => 39.00,
        	'seller_price' => 39.00,
        	'img_big_url' => 'http://img11.360buyimg.com/n5/g1/M00/00/0D/rBEGD0-WWrsIAAAAAAEK_Fb4rbQAAAFNQG20IcAAQsU072.jpg',
        	'img_origon_url' => 'http://img11.360buyimg.com/n5/g1/M00/00/0D/rBEGD0-WWrsIAAAAAAEK_Fb4rbQAAAFNQG20IcAAQsU072.jpg',
        	'img_small_url' => 'http://img11.360buyimg.com/n5/g1/M00/00/0D/rBEGD0-WWrsIAAAAAAEK_Fb4rbQAAAFNQG20IcAAQsU072.jpg',
        	'amount' => 23,
        	'color' => 'red',
        	'is_recommand' => TRUE,
        	'is_hot' => TRUE,
        	'is_top' => TRUE,
        	'intro' => '精致小巧，易携带，TP品质，值得信赖！',
        	'description' => '在没有无线路由器/AP的情况下，将TL-WN725N插到电脑上，并设置为AP模式'
        	]);

        Goods::create([
        	'category' => 21,
        	'brand' => 2,
        	'goods_name' => 'EDUP（EDUP） EP-MS1558 300M 无线网卡 支持软AP WIFI 发射接收器',
        	'marking_price' => 32.2,
        	'seller_price' => 32.00,
        	'img_big_url' => 'http://img10.360buyimg.com/n5/g10/M00/18/1B/rBEQWFF3ghEIAAAAAACYUz6UrMMAAE2jQDLVY8AAJhr880.jpg',
        	'img_origon_url' => 'http://img10.360buyimg.com/n5/g10/M00/18/1B/rBEQWFF3ghEIAAAAAACYUz6UrMMAAE2jQDLVY8AAJhr880.jpg',
        	'img_small_url' => 'http://img10.360buyimg.com/n5/g10/M00/18/1B/rBEQWFF3ghEIAAAAAACYUz6UrMMAAE2jQDLVY8AAJhr880.jpg',
        	'amount' => 32,
        	'color' => 'blue',
        	'is_recommand' => FALSE,
        	'is_top' => TRUE,
        	'is_hot' => TRUE,
        	'intro' => '适用于台式电脑 笔记本等设备进行无线连接 提供方便快捷的无线上网方式。',
        	'description' => '东西用上了，信号超强的，京东快递就是不错还给送上楼了，超棒的'
        	]);
    }
}
