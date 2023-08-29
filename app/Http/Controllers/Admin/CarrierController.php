<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carrier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class CarrierController extends Controller
{
    public function index(){
        $carriers = Carrier::get();
        return view('admin.carrier.index', compact('carriers'));
    }

    public function store(Request $request){
        $tester = $request->validate([
            'name_position' => ['required', 'min:4'],
            'syarat1' => ['min:5'],
            'syarat2' => ['min:5'],
            'syarat3' => ['min:5'],
            'syarat4' => ['min:5'],
            'syarat5' => ['min:5'],
            'tenggat' => ['required'],
            'img' => ['image', 'file', 'max:1024', 'required'],
        ]);

        if($request->file('img')){
            $tester['img'] = $request->file('img')->store('folder-path-cv');
        }

        $tester['identifier'] = Str::slug($request->name_position);

        Carrier::create($tester);
        return back();


    }
}
