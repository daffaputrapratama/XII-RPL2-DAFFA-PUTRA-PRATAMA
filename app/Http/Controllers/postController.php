<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\HaloModel;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function tambahData(Request $request){
         

        $datauser = [
            "name"=> $request->name,
            "kelas"=> $request->kelas,
            "nis"=>$request->nis,
            "date"=> $request->date,
            "email"=> $request->email,
        ];
        HaloModel::create($datauser);
        return redirect("/dataTable");
    }


    public function hapusdata(HaloModel $id){
        HaloModel::destroy($id -> id);
            return redirect ('/tableData');
     }

     public function index(){
        $datauser=HaloModel::all();
        return view('pages.data',['datauser'=>$datauser]);
    }


      public function returnForm(){
        return view("pages.form", [
            "datauser"=>HaloModel::all()
        ]);
    }

    public function returnTable(){
        $datauser=HaloModel::all();
        return view('pages.data',['datauser'=>$datauser]);
    }

    public function home(){
        $datauser=HaloModel::all();
        return view('pages.data',['datauser'=>$datauser]);
    }


    public function ubah(HaloModel $id){
        return view('pages.dataUbah', ["datauser"=>$id]);
     }
  

      function ubahdata(Request $request, HaloModel $id){
        $userdata=([
            "name"=> $request->name,
            "kelas"=> $request->kelas,
            "nis"=>$request->nis,
            "date"=> $request->date,
            "email"=> $request->email,
        ]);

        HaloModel::where('id', $id->id)->update($userdata);
        return redirect("/data")->with('pesan', 'Menambahkan Data Berhasil');
    
    }


    public function sugoi(){
        return view('pages.register.profile',
        ["biodata" =>HaloModel::where('name', Auth::user()->name)->firstOrFail()
    ]);
    }

    public function search(Request $request){
        $searchResult = $request->cari;
        $result=HaloModel::where('name','like',"%".$searchResult."%")->paginate();
        return view('pages.data',['datauser' => $result]);
    }



  

   
    


}
