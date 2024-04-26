<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            array(
                ['name'=>'ยาสีฟัน'],
                ['name'=>'ยาสระผม'],
                ['name'=>'สบู่'],
                ['name'=>'นมกล่อง'],
                ['name'=>'เครื่องดื่มชูกำลัง'],
            )
        );
    }
}
