<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carousel;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carousel::create([
            'image' => 'carousel-1.jpg', // Adjust paths as necessary
            'title' => 'Innovative Joinery & Kitchen Solutions',
            'description' => 'We specialize in creating custom kitchens and joinery that combine beauty and functionality.',
            'button_text' => 'Explore Our Projects',
            'button_link' => '#services',
        ]);

        Carousel::create([
            'image' => 'carousel-2.jpg',
            'title' => 'Expert Craftsmanship for Every Project',
            'description' => 'Our experienced team delivers premium craftsmanship for every bespoke project.',
            'button_text' => 'Learn More About Us',
            'button_link' => '#services',
        ]);

        Carousel::create([
            'image' => 'carousel-3.jpg',
            'title' => 'Custom Kitchens Built to Last',
            'description' => 'Our designs blend innovation, durability, and style to make your dream kitchen a reality.',
            'button_text' => 'Discover Our Services',
            'button_link' => '#services',
        ]);

    }
}
