<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Contemporary Kitchen Design',
            'description' => 'Modern, Sleek Kitchen with Tailored Joinery',
            'details' => 'A beautifully designed kitchen space that maximizes functionality while maintaining modern aesthetics.',
            'image' => '135.jpg',
        ]);

        Project::create([
            'title' => 'Luxury Custom Joinery',
            'description' => 'Bespoke Joinery for High-End Living Spaces',
            'details' => 'This project features custom joinery that blends seamlessly with the home’s luxurious interior.',
            'image' => '121.jpg',
        ]);

        Project::create([
            'title' => 'Modern Open-Plan Living',
            'description' => 'Open-Plan Kitchen and Living Area',
            'details' => 'This project transforms a traditional space into a modern, open-plan living area.',
            'image' => '109.jpg',
        ]);

        Project::create([
            'title' => 'Commercial Kitchen Setup',
            'description' => 'Commercial Kitchen Fit-Out for High-Volume Catering',
            'details' => 'Designed for efficiency and durability, this commercial kitchen fit-out includes custom workstations.',
            'image' => '34.jpg',
        ]);
    }
}
