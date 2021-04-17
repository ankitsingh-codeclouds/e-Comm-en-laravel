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
        DB::table('products')->insert([
            [
                'name'=>'LG Mobile',
                'price'=>'5000',
                'category'=>"mobile",
                'description'=>"A Smartphone with 4GB RAM and much more feature",
                'gallery'=>"https://5.imimg.com/data5/BQ/KA/MY-52481218/lg-mobile-x230-brown-500x500.png"
            ],
            [
                'name'=>'Asus Mobile',
                'price'=>'4000',
                'category'=>"mobile",
                'description'=>"A Asus Smartphone with 4GB RAM and much more feature",
                'gallery'=>"https://tse3.mm.bing.net/th?id=OIP.zAPlkugJdToehUC6O1cCbgHaIq&pid=Api&P=0&w=300&h=300"
            ],
            [
                'name'=>'Mi Mobile',
                'price'=>'7000',
                'category'=>"mobile",
                'description'=>"A MI Smartphone with 4GB RAM and much more feature",
                'gallery'=>"https://5.imimg.com/data5/BQ/KA/MY-52481218/lg-mobile-x230-brown-500x500.png"
            ],
            [
                'name'=>'Spark Mobile',
                'price'=>'15000',
                'category'=>"mobile",
                'description'=>"A Smartphone with 4GB RAM and much more feature",
                'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo4-7KiVbAZ6-vXsg-KnMLzm_584vdrac0IA&usqp=CAU"
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>'10000',
                'category'=>"mobile",
                'description'=>"A Smartphone with 4GB RAM and much more feature",
                'gallery'=>"https://i.insider.com/58dac54a8af5781e008b45be?width=1100&format=jpeg&auto=webp"
            ],
        ]);
    }
}
