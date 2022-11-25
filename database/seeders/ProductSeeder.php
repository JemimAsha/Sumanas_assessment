<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        
        DB::table('products')->insert([
            [
                'id' =>1,
                'code' =>"len123",
                'name'=>'Lenova',
                'description'=>"Lenovo IdeaPad Slim 1 AMD Ryzen 3 3250U 15.6 (39.62cm) FHD Thin & Light Laptop (8GB/512GB SSD/Windows 11/Office 2021/3months Game Pass/Cloud Grey/1.6Kg), 82R10049IN",
                'currency'=>'$',
                'price'=>2000,
                'image'=>'https://m.media-amazon.com/images/I/71C24zZvAjL._AC_UY327_FMwebp_QL65_.jpg',
                'status'=>1
            ],[
                'id' =>2,
                'code' =>"sam123",
                'name'=>'Samsung Galaxy',
                'description'=>"Galaxy S22 Ultra is Samsung Electronics' flagship line of Android smartphones and tablets. The original Samsung Galaxy smartphone debuted in 2009, and the line's first tablet, the Samsung Galaxy Tab, came out the following year.",
                'currency'=>'$',
                'price'=>1000,
                'image'=>'https://images.samsung.com/in/smartphones/galaxy-s22-ultra/buy/S22Ultra_ColorSelection_Burgundy_MO.jpg?imwidth=480',
                'status'=>1
            ],[
                'id' =>3,
                'code' =>"Ref123",
                'name'=>'Refrigerator',
                'image'=>"https://m.media-amazon.com/images/I/618ikeOHFaL._AC_UY327_FMwebp_QL65_.jpg",
                'currency'=>'$',
                'price'=>3000,
                'description'=>'AmazonBasics 345 L 2 star Frost Free Double Door Refrigerator (Silver, Auto Defrosting)',
                'status'=>1
            ],[
                'id' =>4,
                'code' =>"washmac123",
                'name'=>'Washing Machine',
                'description'=>"Lloyd 8 Kg 5 Star Semi-Automatic Top Load Washing Machine (LWMS80BDB, Blue, Active Soak)",
                'currency'=>'$',
                'price'=>4000,
                'image'=>'https://m.media-amazon.com/images/I/71UauqhcjaL._AC_UY327_FMwebp_QL65_.jpg',
                'status'=>1
            ],[
                'id' =>5,
                'code' =>"ac123",
                'name'=>'Air Conditioner',
                'description'=>"LG 1.5 Ton 5 Star AI DUAL Inverter Split AC (Copper, Super Convertible 6-in-1 Cooling, 4 Way Swing, HD Filter with Anti-Virus Protection, 2022 Model, PS-Q19FNZF, White)",
                'currency'=>'$',
                'price'=>7000,
                'image'=>'https://m.media-amazon.com/images/I/61QwsTMs5lL._SL1500_.jpg',
                'status'=>1
            ]
            
        ]);
    }
}
