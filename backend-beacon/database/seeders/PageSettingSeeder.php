<?php

namespace Database\Seeders;

use App\Models\PageSetting;
use Illuminate\Database\Seeder;

class PageSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Hero
            ['key' => 'hero_title', 'value' => 'Pantau Setiap Tetes, Setiap Getaran, Setiap Awan', 'group' => 'hero'],
            ['key' => 'hero_subtitle', 'value' => 'Sistem telemetri pintar buatan Indonesia untuk infrastruktur paling strategis negeri ini.', 'group' => 'hero'],
            // Stats
            ['key' => 'stats_projects', 'value' => '300+', 'group' => 'stats'],
            ['key' => 'stats_partners', 'value' => '200+', 'group' => 'stats'],
            ['key' => 'stats_experience', 'value' => '14', 'group' => 'stats'],
            ['key' => 'stats_provinces', 'value' => '34', 'group' => 'stats'],
            // About
            ['key' => 'about_title', 'value' => 'Beacon Engineering', 'group' => 'about'],
            ['key' => 'about_description', 'value' => 'Beacon Engineering (PT Arta Teknologi Comunindo) adalah perusahaan teknologi Indonesia yang mengkhususkan diri pada solusi telemetri, monitoring, dan sistem peringatan dini untuk infrastruktur sumber daya air.', 'group' => 'about'],
            ['key' => 'about_founded', 'value' => '2012', 'group' => 'about'],
            ['key' => 'about_location', 'value' => 'Yogyakarta, Indonesia', 'group' => 'about'],
            // Contact
            ['key' => 'contact_phone', 'value' => '+62 811 285 0986', 'group' => 'contact'],
            ['key' => 'contact_email', 'value' => 'info@beaconengineering.co.id', 'group' => 'contact'],
            ['key' => 'contact_address', 'value' => 'Jl. Ringroad Utara, Condongcatur, Depok, Sleman, DI Yogyakarta 55281', 'group' => 'contact'],
            ['key' => 'contact_whatsapp', 'value' => '628112850986', 'group' => 'contact'],
        ];

        foreach ($settings as $s) {
            PageSetting::create($s);
        }
    }
}
