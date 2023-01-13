<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shipment;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shipment::create([
            'marking_number' =>  1001,
            'service' =>  'Air',
            'shipper' =>  'PT. Utama Globalindo Cargo',
            'consignee' =>  'PT. Pertamina',
            'volume' =>  '11.01',
            'origin' => 'Padang',
            'pickup_date' => '2022-12-03 06:25:58',
            'delivery_date' => '2022-12-03 09:25:58',
            'actual_delivered_date' => '2022-12-03 20:25:58',
            'dimension' => 'x x',
            'weight' => 7,
            'destination'  => 'Jakarta',
            'status' => 'success_delivered',
            'image_bukti_kirim' => 'news-images/HTHAEXifLExjjCDNbu9fcNfzOUtCTPMZy1RpVvkA.jpg',
            'note' => 'Barang sudah sampai dan diterima oleh mas joko'
        ]);

        Shipment::create([
            'marking_number' =>  1002,
            'service' =>  'Air',
            'shipper' =>  'PT. Utama Globalindo Cargo',
            'consignee' =>  'PT. Permata Indah',
            'volume' =>  '11.01',
            'origin' => 'Bandung',
            'pickup_date' => '2022-10-01 012:25:58',
            'delivery_date' => null,
            'actual_delivered_date' => null,
            'dimension' => 'x x',
            'weight' => 7,
            'destination'  => 'Jakarta',
            'status' => 'create',
            'image' => 'shipment-images/oHwSSpjLTRLjrkKgnucHsVAuN8rBJTJFClPXw8sV.png',
            'note' => 'Pembuatan nota pengiriman permata'
        ]);

        // Shipment::create([
        //     'marking_number' =>  1003,
        //     'service' =>  'Air',
        //     'shipper' =>  'PT. Utama Globalindo Cargo',
        //     'consignee' =>  'PT. Batu Bara Indonesia',
        //     'volume' =>  '11.01',
        //     'origin' => 'Jakarta',
        //     'pickup_date' => '2023-1-02 05:05:00',
        //     'delivery_date' => '2023-1-02 10:15:00',
        //     'actual_delivered_date' => null,
        //     'dimension' => 'x x',
        //     'weight' => 7,
        //     'destination'  => 'Sulawesi',
        //     'status' => 'process',
        //     'image_surat_jalan' => null,
        //     'note' => 'Pembuatan nota pengiriman alat tongkang'
        // ]);
    }
}
