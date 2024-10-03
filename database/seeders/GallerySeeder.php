<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'image' => '8.jpg',
            'title' => 'Gallery Image 1',
        ]);

        Gallery::create([
            'image' => '18.jpg',
            'title' => 'Gallery Image 2',
        ]);

        Gallery::create([
            'image' => '14.jpg',
            'title' => 'Gallery Image 3',
        ]);

        Gallery::create([
            'image' => '44.jpg',
            'title' => 'Gallery Image 4',
        ]);

        Gallery::create([
            'image' => '57.jpg',
            'title' => 'Gallery Image 5',
        ]);

        Gallery::create([
            'image' => '122.jpg',
            'title' => 'Gallery Image 6',
        ]);
    }
}
