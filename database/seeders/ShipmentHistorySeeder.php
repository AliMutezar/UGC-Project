<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShipmentHistory;

class ShipmentHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dummy shipment

        // 1001 Create
        ShipmentHistory::create([
            'marking_number' =>  1001,
            'service' =>  'Air',
            'shipper' =>  'PT. Utama Globalindo Cargo',
            'consignee' =>  'PT. Pertamina',
            'volume' =>  '11.01',
            'origin' => 'Padang',
            'pickup_date' => '2022-12-03 06:25:58',
            'delivery_date' => null,
            'actual_delivered_date' => null,
            'dimension' => 'x x',
            'weight' => 7,
            'destination'  => 'Jakarta',
            'status' => 'create',
            'image' => 'shipment-images/oHwSSpjLTRLjrkKgnucHsVAuN8rBJTJFClPXw8sV.png',
            'note' => 'Pembuatan nota pengiriman'
        ]);


        // 1001 Loading
        ShipmentHistory::create([
            'marking_number' =>  1001,
            'service' =>  'Air',
            'shipper' =>  'PT. Utama Globalindo Cargo',
            'consignee' =>  'PT. Pertamina',
            'volume' =>  '11.01',
            'origin' => 'Padang',
            'pickup_date' => '2022-12-03 06:25:58',
            'delivery_date' => null,
            'actual_delivered_date' => null,
            'dimension' => 'x x',
            'weight' => 7,
            'destination'  => 'Jakarta',
            'status' => 'loading',
            'image' => null,
            'note' => 'Loading barang banyak'
        ]);


        // 1001 proses
        ShipmentHistory::create([
            'marking_number' =>  1001,
            'service' =>  'Air',
            'shipper' =>  'PT. Utama Globalindo Cargo',
            'consignee' =>  'PT. Pertamina',
            'volume' =>  '11.01',
            'origin' => 'Padang',
            'pickup_date' => '2022-12-03 06:25:58',
            'delivery_date' => '2022-12-03 09:25:58',
            'actual_delivered_date' => null,
            'dimension' => 'x x',
            'weight' => 7,
            'destination'  => 'Jakarta',
            'status' => 'process',
            'image' => null,
            'note' => 'Barang sedang dikirim'
        ]);

        ShipmentHistory::create([
            'marking_number' =>  1001,
            'service' =>  'Air',
            'shipper' =>  'PT. Utama Globalindo Cargo',
            'consignee' =>  'PT. Pertamina',
            'volume' =>  '11.01',
            'origin' => 'Padang',
            'pickup_date' => '2022-12-03 06:25:58',
            'delivery_date' => '2022-12-03 09:25:58',
            'actual_delivered_date' => null,
            'dimension' => 'x x',
            'weight' => 7,
            'destination'  => 'Jakarta',
            'status' => 'process',
            'image' => null,
            'note' => 'Barang sedang transit di pelabuhan merak'
        ]);


        // 1001 success
        ShipmentHistory::create([
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
            'image_bukti_kirim' => 'news-images/PFKH0fW5k8jiVL8kk4DvKQ6qN8DUriaaHixybfm3.jpg',
            'note' => 'Barang sudah sampai dan diterima oleh mas joko'
        ]);


        // 1002 
        ShipmentHistory::create([
            'marking_number' =>  1002,
            'service' =>  'Air',
            'shipper' =>  'PT. Utama Globalindo Cargo',
            'consignee' =>  'PT. Permata Indah',
            'volume' =>  '11.01',
            'origin' => 'Bandung',
            'pickup_date' => '2022-12-03 06:25:58',
            'delivery_date' => null,
            'actual_delivered_date' => null,
            'dimension' => 'x x',
            'weight' => 7,
            'destination'  => 'Jakarta',
            'status' => 'create',
            'image' => 'shipment-images/oHwSSpjLTRLjrkKgnucHsVAuN8rBJTJFClPXw8sV.png',
            'note' => 'Pembuatan nota pengiriman permata'
        ]);
    }
}
