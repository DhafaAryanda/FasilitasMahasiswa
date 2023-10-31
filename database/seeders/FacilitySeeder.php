<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Lapangan Indoor, Lapangan Outdoor, Ruangan, Prasarana
    // public function run()
    // {
    //     // Define image file paths
    //     $image1Path = 'public/seeder-detail/lapangan-basket-indoor-1.jpeg';
    //     $image2Path = 'public/seeder-detail/lapangan-basket-indoor-2.jpg';
    //     $image3Path = 'public/seeder-detail/lapangan-basket-indoor-3.jpg';
    //     $image4Path = 'public/seeder-detail/lapangan-basket-indoor-4.jpg';

    //     // Store images in the storage
    //     Storage::put($image1Path, file_get_contents(public_path('public/seeder-detail/image1.jpeg')));
    //     Storage::put($image2Path, file_get_contents(public_path('public/seeder-detail/image2.jpg')));
    //     Storage::put($image3Path, file_get_contents(public_path('public/seeder-detail/image3.jpg')));
    //     Storage::put($image4Path, file_get_contents(public_path('public/seeder-detail/image4.jpg')));

    //     // Insert data into the database
    //     DB::table('facilities')->insert([
    //         [
    //             'title' => 'Lapangan Basket Indoor/Hall',
    //             'categories' => 'Lapangan Indoor',
    //             'about' => '',
    //             'image1_detail' => $image1Path,
    //             'image2_detail' => $image2Path,
    //             'image3_detail' => $image3Path,
    //             'image4_detail' => $image4Path,
    //             'price_per_hour' => 400000.00,
    //             'price_per_day' => 2000000.00,
    //             'show' => true,
    //         ],
    //     ]);
    // }

}
