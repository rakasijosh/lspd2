<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'lg moblie',
            'price'=>'$200',
            'discription'=>'A smartphone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'img/product.png'
            ],
            [
                'name'=>'lg moblie',
            'price'=>'$200',
            'discription'=>'A smartphone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'img/product.png'
            ],
            [
                'name'=>'lg moblie',
            'price'=>'$200',
            'discription'=>'A smartphone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'img/product.png'
            ],
            [
                'name'=>'lg moblie',
            'price'=>'$200',
            'discription'=>'A smartphone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'img/product.png'
            ]
            
        ]);
    }
}
