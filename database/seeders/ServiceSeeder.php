<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Custom Kitchen Design',
            'description' => 'We design custom kitchens that reflect your style and needs, combining functionality with stunning aesthetics.',
            'icon' => 'icon-5.png',
            'image' => 'service-1.jpg',
        ]);

        Service::create([
            'title' => 'Bespoke Joinery',
            'description' => 'Our expert joinery services bring handcrafted solutions to life, from cabinets to bespoke furniture pieces.',
            'icon' => 'icon-6.png',
            'image' => 'service-2.jpg',
        ]);

        Service::create([
            'title' => 'Kitchen Renovations',
            'description' => 'We specialize in full kitchen renovations, modernizing spaces with cutting-edge solutions to enhance your home.',
            'icon' => 'icon-7.png',
            'image' => 'service-3.jpg',
        ]);

        Service::create([
            'title' => 'Custom Cabinets',
            'description' => 'We craft custom cabinets designed to maximize your kitchen’s storage and enhance its aesthetic appeal.',
            'icon' => 'icon-8.png',
            'image' => 'service-4.jpg',
        ]);

        Service::create([
            'title' => 'Space Planning',
            'description' => 'Optimize your kitchen layout with our space planning services, ensuring both beauty and functionality.',
            'icon' => 'icon-9.png',
            'image' => 'service-5.jpg',
        ]);

        Service::create([
            'title' => 'Home Renovations',
            'description' => 'Beyond kitchens, we also provide full home renovation services to revitalize your living space.',
            'icon' => 'icon-10.png',
            'image' => 'service-6.jpg',
        ]);
    }
}
