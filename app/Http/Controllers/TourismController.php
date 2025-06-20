<?php

namespace App\Http\Controllers;

use App\Models\TourismPackage;
use App\Models\Facility;
use App\Models\GalleryItem;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    public function index()
    {
        $packages = TourismPackage::active()->ordered()->get();
        $facilities = Facility::active()->ordered()->get();
        $galleryItems = GalleryItem::active()->ordered()->get();

        $settings = [
            'hero_title' => SiteSetting::get('hero_title', 'Karag Hills'),
            'hero_subtitle' => SiteSetting::get('hero_subtitle', 'Wisata Alam, Budaya & Sejarah Perjuangan'),
            'hero_description' => SiteSetting::get('hero_description', 'Nikmati keindahan panorama alam yang memukau, jelajahi sejarah perjuangan bangsa, dan rasakan kearifan budaya Jawa di destinasi wisata yang menawan ini'),
            'welcome_javanese' => SiteSetting::get('welcome_javanese', 'Sugeng rawuh Purbalinggaku, sugeng pinarak wonten Desa Wisataku, sugeng panggih Karag Hills kanggo konco sedulurku.'),
            'welcome_indonesian' => SiteSetting::get('welcome_indonesian', 'Selamat datang di Purbalinggaku, selamat singgah di Desa Wisataku, selamat bertemu di Karag Hills untuk teman dan saudara semua.'),
            'location_title' => SiteSetting::get('location_title', 'Desa Timbang, Kecamatan Kejobong, Kabupaten Purbalingga'),
            'location_description' => SiteSetting::get('location_description', 'Perbatasan Kabupaten Banjarnegara dan Kabupaten Purbalingga'),
            'motor_parking_price' => SiteSetting::get('motor_parking_price', '3000'),
            'car_parking_price' => SiteSetting::get('car_parking_price', '7000'),
        ];

        return view('tourism.index', compact('packages', 'facilities', 'galleryItems', 'settings'));
    }
}
