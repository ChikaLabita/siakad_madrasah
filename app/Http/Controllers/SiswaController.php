<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;

class SiswaController extends Controller
{
    
    public function index()
    {
        $siswas = Siswa::latest()->paginate(10);
        return view('siswa.siswa_table', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kelas' => 'required'
        ]);

        $siswa = Siswa::create([
            'nisn' => $request->nisn,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
        ]);

        if($siswa){
            //redirect dengan pesan sukses
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('siswa.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $siswa = Siswa::find($id); 
        return view('siswa.detail', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $this->validate($request, [
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kelas' => 'required'
        ]);

        $siswa = Siswa::findOrFail($siswa->id);
        $siswa->update([
            'nisn' => $request->nisn,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
        ]);

        if($siswa){
            //redirect dengan pesan sukses
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('siswa.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $siswas = DB::table('siswas')
            ->where('nisn', 'like', "%" . $keyword . "%")
            ->orWhere('nama_lengkap', 'like', "%" . $keyword . "%")
            ->orWhere('jk', 'like', "%" . $keyword . "%")
            ->orWhere('alamat', 'like', "%" . $keyword . "%")->paginate(10);
        return view('siswa.siswa_table', compact('siswas'));
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
  
        $siswa->delete();
        if($siswa){
            //redirect dengan pesan sukses
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('siswa.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function cetakpdf(){
        $siswa = Siswa::all();
 
    	$pdf = PDF::loadview('siswa.cetakpdf',['siswa'=>$siswa]);
    	return $pdf->stream('laporan-siswa.pdf');
    }
}