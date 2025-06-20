<?php

// database/seeders/TourismSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourismPackage;
use App\Models\Facility;
use App\Models\GalleryItem;
use App\Models\SiteSetting;

class TourismSeeder extends Seeder
{
    public function run()
    {
        // Tourism Packages
        TourismPackage::create([
            'name' => 'PAKET COUPLE',
            'icon' => '💑',
            'price' => 499000,
            'unit' => 'untuk 2 orang',
            'features' => [
                'Tour Guide Lokal',
                'Transportasi',
                'Dokumentasi',
                'Makan & Snack',
                'Air Mineral',
                'Oleh-oleh',
                'Spot Foto Romantis'
            ],
            'is_featured' => true,
            'sort_order' => 1
        ]);

        TourismPackage::create([
            'name' => 'MIN 6 ORANG',
            'icon' => '👥',
            'price' => 199000,
            'unit' => 'per person',
            'features' => [
                'Tour Guide Lokal',
                'Transportasi',
                'Dokumentasi',
                'Makan & Snack',
                'Air Mineral',
                'Oleh-oleh'
            ],
            'is_featured' => false,
            'sort_order' => 2
        ]);

        TourismPackage::create([
            'name' => 'MIN 10 ORANG',
            'icon' => '👨‍👩‍👧‍👦',
            'price' => 169000,
            'unit' => 'per person',
            'features' => [
                'Tour Guide Lokal',
                'Transportasi',
                'Dokumentasi',
                'Makan 1x',
                'Snack 1x',
                'Air Mineral',
                'Oleh-oleh'
            ],
            'is_featured' => false,
            'sort_order' => 3
        ]);

        TourismPackage::create([
            'name' => 'MIN 20 ORANG',
            'icon' => '🚌',
            'price' => 159000,
            'unit' => 'per person',
            'features' => [
                'Tour Guide Lokal',
                'Transportasi',
                'Dokumentasi',
                'Makan 1x',
                'Snack 1x',
                'Air Mineral',
                'Oleh-oleh'
            ],
            'is_featured' => false,
            'sort_order' => 4
        ]);

        TourismPackage::create([
            'name' => '30+ ORANG',
            'icon' => '🏫',
            'price' => 149000,
            'unit' => 'per person',
            'features' => [
                'Tour Guide Lokal',
                'Transportasi',
                'Dokumentasi',
                'Makan & Snack',
                'Air Mineral',
                'Oleh-oleh',
                'Diskon Grup'
            ],
            'is_featured' => true,
            'sort_order' => 5
        ]);

        // Facilities
        Facility::create([
            'name' => 'Area Parkir Luas',
            'icon' => '🚗',
            'description' => 'Area parkir yang aman dan luas untuk kendaraan motor maupun mobil dengan sistem keamanan 24 jam',
            'sort_order' => 1
        ]);

        Facility::create([
            'name' => 'Toilet Bersih',
            'icon' => '🚻',
            'description' => 'Fasilitas toilet yang bersih, modern, dan terawat untuk kenyamanan seluruh pengunjung',
            'sort_order' => 2
        ]);

        Facility::create([
            'name' => 'Mushola',
            'icon' => '🕌',
            'description' => 'Tempat ibadah yang nyaman dan tenang untuk melaksanakan sholat dengan fasilitas wudhu yang memadai',
            'sort_order' => 3
        ]);

        Facility::create([
            'name' => 'Pendopo Pertemuan',
            'icon' => '🏛️',
            'description' => 'Ruang pertemuan bergaya tradisional yang cocok untuk acara, gathering, dan kegiatan budaya',
            'sort_order' => 4
        ]);

        Facility::create([
            'name' => 'Indoor Playground',
            'icon' => '🎮',
            'description' => 'Area bermain indoor yang aman dan menyenangkan untuk anak-anak dengan berbagai permainan edukatif',
            'sort_order' => 5
        ]);

        Facility::create([
            'name' => 'Sirkuit Go-Kart',
            'icon' => '🏎️',
            'description' => 'Sirkuit go-kart yang menantang dan seru untuk pengalaman berkendara yang tak terlupakan',
            'sort_order' => 6
        ]);

        Facility::create([
            'name' => 'Free WiFi',
            'icon' => '📶',
            'description' => 'Akses internet gratis berkecepatan tinggi untuk berbagi pengalaman wisata Anda di media sosial',
            'sort_order' => 7
        ]);

        // Gallery Items
        GalleryItem::create([
            'title' => 'Gapura Gunungan Wayang',
            'icon' => '🏛️',
            'description' => 'Gapura megah berbentuk Gunungan Wayang Purwa yang menjadi ikon dan simbol kecintaan terhadap budaya Jawa',
            'sort_order' => 1
        ]);

        GalleryItem::create([
            'title' => 'Panorama Sungai',
            'icon' => '🌄',
            'description' => 'Pemandangan spektakuler ujung lekukan sungai yang mengalir dari Banjarnegara menuju Sungai Klawing',
            'sort_order' => 2
        ]);

        GalleryItem::create([
            'title' => 'Pendopo Tradisional',
            'icon' => '🏠',
            'description' => 'Ruang pertemuan bergaya arsitektur tradisional Jawa untuk berbagai acara budaya dan gathering',
            'sort_order' => 3
        ]);

        GalleryItem::create([
            'title' => 'Monumen Sejarah',
            'icon' => '📜',
            'description' => 'Monumen dan artefak bersejarah yang menceritakan kisah perjuangan melawan penjajahan Belanda',
            'sort_order' => 4
        ]);

        // Site Settings
        $settings = [
            'hero_title' => 'Karag Hills',
            'hero_subtitle' => 'Wisata Alam, Budaya & Sejarah Perjuangan',
            'hero_description' => 'Nikmati keindahan panorama alam yang memukau, jelajahi sejarah perjuangan bangsa, dan rasakan kearifan budaya Jawa di destinasi wisata yang menawan ini',
            'welcome_javanese' => 'Sugeng rawuh Purbalinggaku, sugeng pinarak wonten Desa Wisataku, sugeng panggih Karag Hills kanggo konco sedulurku.',
            'welcome_indonesian' => 'Selamat datang di Purbalinggaku, selamat singgah di Desa Wisataku, selamat bertemu di Karag Hills untuk teman dan saudara semua.',
            'location_title' => 'Desa Timbang, Kecamatan Kejobong, Kabupaten Purbalingga',
            'location_description' => 'Perbatasan Kabupaten Banjarnegara dan Kabupaten Purbalingga',
            'motor_parking_price' => '3000',
            'car_parking_price' => '7000',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::create([
                'key' => $key,
                'value' => $value,
                'type' => is_numeric($value) ? 'number' : 'text'
            ]);
        }
    }
}
