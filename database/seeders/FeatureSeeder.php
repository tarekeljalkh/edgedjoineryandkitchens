<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::create([
            'title' => 'Expert Craftsmanship and Exceptional Designs',
            'description' => 'At Edged Joinery & Kitchens, we specialize in transforming spaces into functional works of art.
                             With over 25 years of experience, we combine innovative solutions and meticulous attention to
                             detail in every project.',
            'image1' => '16.jpg',  // Ensure this path corresponds to the correct storage location
            'image2' => '50.jpg',  // Ensure this path corresponds to the correct storage location
            'icon1' => 'icon-2.png',  // First icon file path
            'icon2' => 'icon-3.png',  // Second icon file path
            'icon3' => 'icon-4.png',  // Third icon file path
        ]);
    }
}
