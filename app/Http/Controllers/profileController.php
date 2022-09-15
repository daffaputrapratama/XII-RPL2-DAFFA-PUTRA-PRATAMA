<?php

namespace App\Http\Controllers;
use App\Models\HaloModel;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
        return view
        ('pages.profile', [
            "data"=>HaloModel::where('email', auth()->user()->email)->firstOrFail()
        ]);
    }

    public function pro(){
        return view('pages.profile');
    }
    
}
