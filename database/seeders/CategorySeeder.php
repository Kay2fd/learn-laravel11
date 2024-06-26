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
        Category::create([
            'name' => 'IOT',
            'slug' => 'iot-1',
            'color' => 'blue'
        ]);
        
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'red'
        ]);
    }
}
