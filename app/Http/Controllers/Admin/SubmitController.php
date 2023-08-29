<?php

namespace App\Http\Controllers\Admin;

use App\Models\Submit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Carrier;
use App\Models\Status;
use Laravel\Ui\Presets\React;

class SubmitController extends Controller
{

    public function index(){
        $submits = Submit::get();
        return view('admin.home', compact('submits'));
    }

    public function moreEditted(){
        $carriers = Carrier::get();
        return view('admin.editted', compact('carriers'));
    }

    public function moreEdittedInformation(Carrier $carrier){
       $statuses = Status::get();
        $carriers = $carrier->submits;
        return view('admin.information', compact('carriers', 'statuses'));
    }

    public function update(Request $request, Submit $carrier){
        $carrier->update([
            'status_id' => $request->status_id,
        ]);

        return back();
    }

    // public function edit(Submit $submit){
    //     return view('user.submit.show', compact('submit'));
    // }

    // public function update(Request $request,Submit $submit){
    //     $submits = $request->validate([
    //         'full_name' => ['required'],
    //         'email' => ['required', 'email'],
    //         'phone' => ['required'],
    //         'file_cv' => ['required','file', 'max:1024'],
    //     ]);

    //     if($request->file('file_cv')){
    //         if($request->oldImage){
    //             Storage::delete($request->oldImage);
    //         }
            
    //         $submits['file_cv'] = $request->file('file_cv')->store('folder-path-cv');
    //     }

    //     $submit->update($submits);

    //     return redirect('user/carrier');

    // }


    // public function destroy(Submit $submit){
    //     if($submit->file_cv){
    //         Storage::delete($submit->file_cv);
    //     }

    //     $submit->delete();

    //     return redirect('user/carrier');

    // }
}
