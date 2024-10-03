<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'site_name' => 'Edged Joinery & Kitchens',
            'logo' => 'logo.png',
            'whatsapp_number' => '61484515491',
            'email' => 'edgedjoineryandkitchens@gmail.com',
            'phone' => '+61 484 515 491',
            'facebook_link' => 'https://www.facebook.com/profile.php?id=100064003991245',
            'instagram_link' => 'https://www.instagram.com/edgedjoinerykitchens',
            'seo_title' => 'Edged Joinery & Kitchens - Innovative Joinery Solutions',
            'seo_description' => 'Cutting edge services for kitchen joinery and design.',
            'seo_keywords' => 'Joinery, Kitchens, Design, Architecture, Interior',
        ]);
    }
}
