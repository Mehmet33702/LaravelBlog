<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //db tanımlama tam yolu ile birlikte yapılıyor
use Illuminate\Support\Str; //slug için tanımlandı

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=['Eğlenci','Bilişim','Gezi', 'Günlük Yaşam'];
        foreach($categories as $category){


        //Kategori içeriğini doldurmak
        DB::table('Categories')->insert([
            'name'=>$category,
            'slug'=>Str::slug($category),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
 }
}
