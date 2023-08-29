<?php

namespace App\Http\Controllers\User;

use App\Models\Submit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class SubmitController extends Controller
{
    public function show(Submit $submit){
        return view('user.submit.shows', compact('submit'));
    }

    public function edit(Submit $submit){
        return view('user.submit.show', compact('submit'));
    }

    public function update(Request $request,Submit $submit){
        $submits = $request->validate([
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'file_cv' => ['required','file', 'max:1024'],
        ]);

        if($request->file('file_cv')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            
            $submits['file_cv'] = $request->file('file_cv')->store('folder-path-cv');
        }

        $submit->update($submits);

        return redirect('user/carrier');

    }


    public function destroy(Submit $submit){
        if($submit->file_cv){
            Storage::delete($submit->file_cv);
        }

        $submit->delete();

        return redirect('user/carrier');

    }
}
