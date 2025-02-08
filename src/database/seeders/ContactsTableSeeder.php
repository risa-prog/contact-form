<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pram=[
            'name'=>'Taro',
            'email'=>'Taro@example.com',
            'tel'=>09066112233,
            'content'=>'商品について'
        ];
        DB::table('contact')->insert($pram);
        
        $pram=[
            'name'=>'Jiro',
            'email'=>'Jiro@example.com',
            'tel'=>09055668798,
            'content'=>'送料について'
        ];
        DB::table('contact')->insert($pram);

        $pram=[
            'name'=>'Taro',
            'email'=>'Taro@example.com',
            'tel'=>09056437893,
            'content'=>'返品について'
        ];
        DB::table('contact')->insert($pram);
        
        
    }
}
