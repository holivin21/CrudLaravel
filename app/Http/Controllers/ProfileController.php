<?php

namespace App\Http\Controllers;
use App\ProfileModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function Profile()
    {
        $profile=ProfileModel::all();
        return view('ProfileView',['profile'=>$profile]);
    }
    public function Tambah()
    {
        return view('TambahProfile');
    }
    public function Menambah(Request $request)
    {
        $data=$request->input();
        $tambah=new ProfileModel;
        $tambah->NAME=$data['nama'];
        $tambah->DOB=$data['dob'];
        $tambah->AGE=(int)$data['umur'];
        $tambah->save();
        return redirect('/');
    }
    public function TampilEdit($id){
        $profile=ProfileModel::find($id);
        return view('Edit',['profile'=>$profile]);
    }
    public function Edit(Request $request, $id){
        $data=$request->input();
        print_r($data);
        $profile=ProfileModel::find($id);
        $profile->NAME=$data['name'];
        $profile->DOB=$data['dob'];
        $profile->AGE=$data['umur'];
        $profile->save();
        return redirect('/');

    }
    public function Delete($id){
        $profile=ProfileModel::find($id);
        $profile->delete();
        return redirect('/');
    }
}
