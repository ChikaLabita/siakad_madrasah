<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->paginate(10);
        return view('guru.guru_table', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'mapel_ampu' => 'required'
        ]);

        $guru = Guru::create([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'mapel_ampu' => $request->mapel_ampu,
        ]);

        if($guru){
            //redirect dengan pesan sukses
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('guru.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $guru = Guru::find($id); 
        return view('guru.detail', compact('guru'));
    }

    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'mapel_ampu' => 'required'
        ]);

        $guru = Guru::findOrFail($guru->id);
        $guru->update([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'mapel_ampu' => $request->mapel_ampu,
        ]);

        if($guru){
            //redirect dengan pesan sukses
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('guru.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $gurus = DB::table('gurus')
            ->where('nip', 'like', "%" . $keyword . "%")
            ->orWhere('nama_lengkap', 'like', "%" . $keyword . "%")
            ->orWhere('jk', 'like', "%" . $keyword . "%")
            ->orWhere('alamat', 'like', "%" . $keyword . "%")
            ->orWhere('mapel_ampu', 'like', "%" . $keyword . "%")->paginate(10);
        return view('guru.guru_table', compact('gurus'));
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
  
        $guru->delete();
        if($guru){
            //redirect dengan pesan sukses
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('guru.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function cetakpdf(){
        $guru = Guru::all();
 
    	$pdf = PDF::loadview('guru.cetakpdf',['guru'=>$guru]);
    	return $pdf->stream('laporan-guru.pdf');
    }
}
