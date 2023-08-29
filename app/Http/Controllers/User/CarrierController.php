<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\CarrierRequest;
use App\Models\Carrier;
use App\Models\Submit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carriers = Carrier::get();
        // $submit = Submit::get();
        // dd($submit);
        return view('user.carrier.index', compact('carriers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function make(Carrier $carrier)
    {
        return view('user.carrier.make', compact('carrier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarrierRequest $request)
    {
        $request['carrier_id'] = $request->carrier_id;
        $request['user_id'] = Auth()->user()->id;
        $request['identifier'] = Auth()->user()->name . Str::random(10);

        Submit::create([
            'carrier_id' => $request->carrier_id,
            'user_id' => $request->user_id,
            'identifier' => $request->identifier,
            'file_cv' => $request->file('file_cv')->store('folder-path-cv'),
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        
        return redirect('user/carrier')->with('success', 'The Information Has Been Added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrier $carrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrier $carrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrier $carrier)
    {
        //
    }
}
