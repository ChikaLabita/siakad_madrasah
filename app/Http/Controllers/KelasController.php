<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::latest()->paginate(10);
        return view('kelas.kelas_table', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
            'wali_kelas' => 'required'
        ]);

        $kelas = Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'wali_kelas' => $request->wali_kelas,
        ]);

        if($kelas){
            //redirect dengan pesan sukses
            return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kelas.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $kelas = Kelas::find($id); 
        return view('kelas.detail', compact('kelas'));
    }

    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, Kelas $kelas)
    {
        $this->validate($request, [
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
            'wali_kelas' => 'required',
        ]);

        $kelas = Kelas::findOrFail($kelas->id);
        $kelas->update([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'wali_kelas' => $request->wali_kelas
        ]);

        if($kelas){
            //redirect dengan pesan sukses
            return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kelas.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $kelas = DB::table('kelas')
            ->where('kode_kelas', 'like', "%" . $keyword . "%")
            ->orWhere('nama_kelas', 'like', "%" . $keyword . "%")
            ->orWhere('wali_kelas', 'like', "%" . $keyword . "%")->paginate(10);
        return view('kelas.kelas_table', compact('kelas'));
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
  
        $kelas->delete();
        if($kelas){
            //redirect dengan pesan sukses
            return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('kelas.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function cetakpdf(){
        $kelas = Kelas::all();
 
    	$pdf = PDF::loadview('kelas.cetakpdf',['kelas'=>$kelas]);
    	return $pdf->stream('laporan-kelas.pdf');
    }
}
