<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
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
                'id'  => 1 ,
                'title_en'=> 'title en 1',
                'title_id'=> 'title id 1',
                'price_en'=> '1000' ,
                'price_id'=> '1200' ,
                'qty_id'=> '2221' ,
                'qty_en'=> '2222' ,
                'desc_id'=> 'descripton id 1' ,
                'desc_en'=> 'description en 1',
            ],
            [
                'id'  => 2,
                'title_en'=> 'title en 2',
                'title_id'=> 'title id 2',
                'price_en'=> '1200' ,
                'price_id'=> '1300' ,
                'qty_id'=> '22121' ,
                'qty_en'=> '22322' ,
                'desc_id'=> 'descripton id 2' ,
                'desc_en'=> 'description en 2' 
            ],
        ]);
    }
}
