<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carrier;

class ApprovalController extends Controller
{
    public function edit(Carrier $carrier){
        dd($carrier->submits);
    }
}
