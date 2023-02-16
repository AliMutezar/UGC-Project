<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Models\Shipment;
use App\Models\ShipmentHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {   

        $shipments = Shipment::all();
        if($request->ajax()) {
            return DataTables::of($shipments)
                ->addIndexColumn()
                ->editColumn('updated_at', function($data) {
                    return Carbon::parse($data->update_at)->format('Y-m-d H:m:s');
                })

                ->addColumn('action', function($row) {

                    $td = '<a class="text-info" href="/admin/shipments/'.$row->marking_number.'/edit">Detail</a>';
                    return $td;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.shipments.index', [
            'table_title' => 'Shipment Data'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.shipments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            "marking_number" => ['required', 'unique:shipments'],
            "service" => ['required', 'min:3'],
            "shipper" => ['required', 'max:255'],
            "consignee" => ['required', 'max:255'],
            "volume" => ['required', 'numeric'],
            "origin" => ['required', 'max:255'],
            "pickup_date" => ['required'],
            // "delivery_date" => ['required','date'],
            // "actual_delivered_date" => ['required','date'],
            "dimension" => ['required', 'min:2'],
            "weight" => ['required', 'numeric'],
            "destination" => ['required', 'max:255'],
            "status" => ['required', Rule::notIn(['0'])],
            "image" =>  ['image','file','max:2048'],
            "note" => ['required', 'max:255'],
            "email" => ['required'],
            "ccemail" => ['required']
        ]);

        // dd($request['pickup_date']);
        // dd($request->all());

 
        $validateData['pickup_date'] = Carbon::parse(request('pickup_date'))->format('Y-m-d H:i:s');
        if($request['delivery_date']) {
            $validateData['delivery_date'] = Carbon::parse(request('delivery_date'))->format('Y-m-d H:i:s');
        }

        if($request['actual_delivered_date']) {
            $validateData['actual_delivered_date'] = Carbon::parse(request('actual_delivered_date'))->format('Y-m-d H:i:s');
        }

        if($request->file('image')) {
            // dd($validateData['image'] = $request->file('image')->store('shipment-images'));
            $validateData['image'] = $request->file('image')->store('shipment-images');
        }

        // insert into 2 Tables(shipments and shipment histories)
        Shipment::create($validateData);
        ShipmentHistory::create($validateData);

        // dispatch(new SendMailJob($validateData));
        return redirect('admin/shipments')->with('success', 'Shipment has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        return view('pages.admin.shipments.edit', [
            "shipment"  =>  $shipment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipment $shipment)
    {
        $validateData = $request->validate([
            "marking_number" => ['required'],
            "service" => ['required', 'min:3'],
            "shipper" => ['required', 'max:255'],
            "consignee" => ['required', 'max:255'],
            "volume" => ['required', 'numeric'],
            "origin" => ['required', 'max:255'],
            "pickup_date" => ['required'],
            // "delivery_date" => ['required','date'],
            // "actual_delivered_date" => ['required','date'],
            "dimension" => ['required', 'min:2'],
            "weight" => ['required', 'numeric'],
            "destination" => ['required', 'max:255'],
            "status" => ['required', Rule::notIn(['0'])],
            "image" =>  ['image','file','max:2048'],
            "note" => ['required', 'max:255'],
            "email" => ['required'],
            "ccemail" => ['required'],
        ]);

        // dd($request['pickup_date']);
        // dd(implode(',' , $request->email));
 
        $validateData['pickup_date'] = Carbon::parse(request('pickup_date'))->format('Y-m-d H:i:s');

        if($request['delivery_date']) {
            $validateData['delivery_date'] = Carbon::parse(request('delivery_date'))->format('Y-m-d H:i:s');
        }

        if($request['actual_delivered_date']) {
            $validateData['actual_delivered_date'] = Carbon::parse(request('actual_delivered_date'))->format('Y-m-d H:i:s');
        }

        if($request->image) {
            $validateData['image'] = $request->file('image')->store('shipment-images');
        }
        

        // update into Tables shipments and create into shipment histories
        Shipment::where('marking_number', $shipment->marking_number)->update($validateData);
        ShipmentHistory::create($validateData);

        dispatch(new SendMailJob($validateData));
        return redirect('admin/shipments')->with('success', 'Shipment has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipment $shipment, ShipmentHistory $shipmentHistory)
    {
        // dd($shipment->marking_number);

        if($shipment->image) {
            Storage::delete($shipment->image);
        }

        Shipment::where('marking_number', $shipment->marking_number)->delete();
        ShipmentHistory::where('marking_number', $shipment->marking_number)->delete();
        return redirect('admin/shipments')->with('success', 'Shipment has been deleted');
    }
}
