<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'client_name' => 'Emily Thompson',
            'client_role' => 'Homeowner',
            'testimonial_text' => '“Edged Joinery & Kitchens transformed my outdated kitchen into a modern masterpiece. The craftsmanship and attention to detail were incredible. Highly recommended!”',
            'client_image' => 'testimonial-1.jpg',
        ]);

        Testimonial::create([
            'client_name' => 'Michael Brown',
            'client_role' => 'Interior Designer',
            'testimonial_text' => '“Working with Edged Joinery was an absolute pleasure. They designed and built custom cabinetry for my kitchen, and the result was nothing short of amazing!”',
            'client_image' => 'testimonial-2.jpg',
        ]);

        Testimonial::create([
            'client_name' => 'David Collins',
            'client_role' => 'Property Developer',
            'testimonial_text' => '“From consultation to completion, the team at Edged Joinery was professional and creative. My kitchen renovation exceeded all my expectations!”',
            'client_image' => 'testimonial-3.jpg',
        ]);

    }
}
