<?php

namespace Database\Seeders;

use App\Models\Fact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fact::create([
            'icon' => 'icon-2.png', // Adjust paths as necessary
            'title' => 'Bespoke Design Approach',
            'description' => 'At Edged Joinery & Kitchens, we focus on creating custom designs tailored to meet each client\'s specific needs, ensuring unique, functional spaces.',
        ]);

        Fact::create([
            'icon' => 'icon-3.png',
            'title' => 'Innovative Craftsmanship',
            'description' => 'We use cutting-edge tools and techniques to bring innovative and high-quality solutions to your kitchen joinery projects.',
        ]);

        Fact::create([
            'icon' => 'icon-4.png',
            'title' => 'Reliable Project Management',
            'description' => 'Our dedicated project management team ensures that each project runs smoothly, from planning to final installation, keeping timelines and budgets on track.',
        ]);

    }
}
