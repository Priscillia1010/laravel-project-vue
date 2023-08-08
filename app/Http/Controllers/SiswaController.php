<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // public function index(){
    //     $data = Siswa::paginate(1);
    //     return view('siswa.index', compact('data'));
    // }
    public function create(){
        return view('siswa.create');
    }
    public function store(Request $request){
        $data = new Siswa;
        $data->nama = $request->nama_siswa;
        $data->nisn = $request->nisn;
        $data->no_hp = $request->no_hp;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('siswa/create');
    }
    public function edit($id){
        $siswa = Siswa::where('id', $id)->first();
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request,$id){
        $data = Siswa::where('id',$id)->first();
        $data->nama = $request->nama_siswa;
        $data->nisn = $request->nisn;
        $data->no_hp = $request->no_hp;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect('siswa/list');
    }
    public function delete($id){
            $siswa = Siswa::find($id);
            $siswa->delete();
            return redirect('siswa/list');
        }
    
    public function index(){
            return view('siswa.index');
        }
        
    public function get_data(){
        $data = Siswa::orderBy('id', 'desc')->get();
        return response()->json($data);
        }
    
    public function store_siswa() {
        $id_edit = request('id_edit');
        if($id_edit != "null") {
            $data = Siswa::find($id_edit);
            $data->nama = request('nama');
            $data->alamat = request('alamat');
            $data->save();
        } else {
            $data = new Siswa;
            $data->nama = request('nama');
            $data->alamat = request('alamat');
            $data->save();
        }
        
        return response()->json('sukses', 200);
    }

    public function get_detail($id) {
        $dt = Siswa::find($id);
        
        return response()->json($dt, 200);
    }

    public function hapus_siswa($id) {
        Siswa::where('id', $id)->delete();
        
        return response()->json('sukses', 200);
    }
}