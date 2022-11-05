<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;

class KelassController extends Controller
{
    public function index()
    {
        $kelasses = Kelass::latest()->paginate(10);
        return view('kelas.kelas_table', compact('kelasses'));
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

        $kelasses = Kelass::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'wali_kelas' => $request->wali_kelas,
        ]);

        if($kelasses){
            //redirect dengan pesan sukses
            return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kelas.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $kelasses = Kelass::find($id); 
        return view('kelas.detail', compact('kelas'));
    }

    public function edit(Kelass $kelasses)
    {
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, Kelass $kelasses)
    {
        $this->validate($request, [
            'kode_kelas' => 'required',
            'nama_kelas' => 'required',
            'wali_kelas' => 'required',
        ]);

        $kelasses = Kelass::findOrFail($kelasses->id);
        $kelasses->update([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'wali_kelas' => $request->wali_kelas
        ]);

        if($kelasses){
            //redirect dengan pesan sukses
            return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kelas.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $kelasses = DB::table('kelas')
            ->where('kode_kelas', 'like', "%" . $keyword . "%")
            ->orWhere('nama_kelas', 'like', "%" . $keyword . "%")
            ->orWhere('wali_kelas', 'like', "%" . $keyword . "%")->paginate(10);
        return view('kelas.kelas_table', compact('kelas'));
    }

    public function destroy($id)
    {
        $kelasses = Kelass::findOrFail($id);
  
        $kelasses->delete();
        if($kelasses){
            //redirect dengan pesan sukses
            return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('kelas.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function cetakpdf(){
        $kelasses = Kelass::all();
 
    	$pdf = PDF::loadview('kelas.cetakpdf',['kelas'=>$kelasses]);
    	return $pdf->stream('laporan-kelas.pdf');
    }
}
