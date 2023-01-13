<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\ShipmentHistory;
use Illuminate\Http\Request;

class TrackShipmentController extends Controller
{
    public function index(Request $request)
    {
        // dd(ShipmentHistory::get()->where('marking_number_id', '1001'));
        // dd(request('search'));
         

        $data_shipment = ShipmentHistory::where('marking_number', request('search'));

        if(request('search')) {
            $data_shipment = $data_shipment->get()->reverse();
        }

        return view('pages.track', [
            'shipment_history' => $data_shipment
        ]);
    }
}
