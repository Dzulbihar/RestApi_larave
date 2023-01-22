<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{

    public function index()
    {
    	$siswa = Siswa::all();
    	$data = ['siswa'=>$siswa];

    	return $data;
    }

    public function create(Request $request)
    {
        $siswa = Siswa::create($request->all());
        $siswa->save();

        return " Data Tersimpan ";
    }

    public function update(Request $request ,$id)
    {       
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        $siswa->save();

        return " Data Terupdate ";
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return " Data Terhapus ";
    }

    public function detail($id)
    {
        $siswa = Siswa::find($id);

        return $siswa;
    }

}
