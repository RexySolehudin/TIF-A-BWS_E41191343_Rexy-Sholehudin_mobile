<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //di sini isi controller management User
    public function index(){
        //return "Halo ini adalah method index,dalam controller ManagementUser";
        $nama = "Rexy Solehudin Abdi Holili";
        $pelajaran = ["Algoritma dan pemugraman","Kalkulus","Pemograman web"];
        return view('home', compact('nama','pelajaran'));
        
    }

    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(Request $Request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" .$id;
    }
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" .$id;
    }
    public function update(Request $Request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" .$id;
    }
    public function destroy($id)
    {
        return "Method ini nantinya akan digunakan untuk menghapus data user dengan id=" .$id;
    }
}