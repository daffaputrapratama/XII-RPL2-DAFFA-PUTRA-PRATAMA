<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\HaloModel;


class RegController extends Controller
{
    public function addData(Request $request){
         
        $namaLengkap = $request->namaAwal . " " . $request->namaAkhir;
        $namaAkhir = $request->namaAkhir;


        $data = [
            "namaAkhir=>$namaAkhir",
            "name"=>$namaLengkap,
            "email"=> $request->email,
            "password"=>Hash::make($request->password)
     
        ];
        User::create($data);
        return redirect("/");
    }

    // public function index(){
    //     return view("pages.register.regTampil", [
    //         "data"=>User::all()
    //     ]);
    // }

    public function hapusdata(User $id){
        User::destroy($id -> id);
            return redirect ('/regData');
     }
     
     public function indexRegist(){
        $data=User::all();
        return view('pages.register.regData',['data'=>$data]);
    }
    
    public function returnData(){
        $data=User::all();
        return view('pages.register.regData',['data'=>$data]);
    }

    public function toRegister(){
        return view("pages.register.regRegist", [
            "datauser"=>HaloModel::all()
        ]);
    }

    // ini fungsi buat return ke table aja

    public function cari(Request $request){
        $searchResult = $request->cari;
        $result=User::where('name','like',"%".$searchResult."%")->paginate();
        return view('pages.register.regData',['data' => $result]);
    }

    

}
