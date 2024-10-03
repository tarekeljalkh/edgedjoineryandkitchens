<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Crafting Exceptional Kitchens and Joinery Solutions',
            'description' => 'At *Edged Joinery & Kitchens*, we are dedicated to designing and delivering high-quality kitchens
                              that are both functional and stylish. Our expert craftsmen take pride in providing bespoke solutions,
                              tailored to fit the unique needs of every home.',
            'years_experience' => '25',
            'image1' => '6.jpg',
            'image2' => '117.jpg',
        ]);

    }
}
