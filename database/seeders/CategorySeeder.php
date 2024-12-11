<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cats = ['PCS' ,'LAPS', 'PHONES' ,'TABLET' ]; 
        foreach($cats as $c)
        {
            Category::create([
                'name' => $c
            ]);
        }    }


        
}
