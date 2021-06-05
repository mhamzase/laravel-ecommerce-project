<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'OPPO',
                'price' => '35000',
                'category' => 'mobile',
                'description' => 'model A5 2020, 4GB , 128GB , 15MB Camera',
                'gallery' => 'https://www.vhv.rs/dpng/d/474-4743764_oppo-a5-2020-dazzling-white-hd-png-download.png',
                'created_at' => \Carbon\Carbon::now('utc'),
                'updated_at' => \Carbon\Carbon::now('utc')
            ],
            [
                'name' => 'HAUWEI',
                'price' => '30000',
                'category' => 'mobile',
                'description' => 'model y9, 4GB , 64GB , 16MB Camera',
                'gallery' => 'https://www.gizmochina.com/wp-content/uploads/2018/10/Huawei-Y9-2019-569x569.jpg',
                'created_at' => \Carbon\Carbon::now('utc'),
                'updated_at' => \Carbon\Carbon::now('utc')
            ],
            [
                'name' => 'Fiction 40S FHD Black',
                'price' => '49000',
                'category' => 'LED',
                'description' => 'FHD Picture Quality:1.1 GHz Quad-Core Processor:1 GB RAM & 8 GB ROM:IOT-enabled LED TV:Android 9.0 (Upgradeable):YouTube:Chromecast:Bluetooth',
                'gallery' => 'https://cdn.shopify.com/s/files/1/2459/1583/products/Fiction_2000x_crop_center.png?v=1596519816',
                'created_at' => \Carbon\Carbon::now('utc'),
                'updated_at' => \Carbon\Carbon::now('utc')
            ],
            [
                'name' => 'VF-1035GD Dawlance Vertical Freezer Direct Cool 267Ltr Black',
                'price' => '58000',
                'category' => 'Freezer',
                'description' => 'Capacity: 267 Ltr. REFRIGERATOR TYPE: Upright Freezer  COOLING TECHNOLOGY: Direct Cool TECHNOLOGY: Conventional POWER: 150 W NEWLY TYPE: Free Standing UWCF SIZES:608*717*1545 mm Made In Turkey',
                'gallery' => 'https://radiotvcentre.pk/wp-content/uploads/2019/09/Dawlance-Vertical-Freezer-VF-1035WBGDR.png',
                'created_at' => \Carbon\Carbon::now('utc'),
                'updated_at' => \Carbon\Carbon::now('utc')
            ],
            [
                'name' => 'Samsung Galaxy Tab S2 9.7',
                'price' => '48000',
                'category' => 'Tablet',
                'description' => '
                This tablets has 8 MP, autofocus and has 2.1 MP Secondary camera This tablets has 9.7 inches, 291.4 This tablets has 32 GB, 3 GB RAM of internal memory. This tablets has Non-removable Li-Ion 5870 mAh battery This tablets has Single SIM',
                'gallery' => 'https://www.pricematch.pk/uploadedstuff/productimages/23-Samsung-Galaxy-Tab-S2-9.7.jpg',
                'created_at' => \Carbon\Carbon::now('utc'),
                'updated_at' => \Carbon\Carbon::now('utc')
            ]

            
        ]);
    }
}
