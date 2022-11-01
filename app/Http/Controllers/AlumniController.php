<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::latest()->paginate(10);
        return view('alumni.alumni_table', compact('alumnis'));
    }

    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'angkatan' => 'required',
            'thn_lulus' => 'required',
        ]);

        $alumni = Alumni::create([
            'nisn' => $request->nisn,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'angkatan' => $request->angkatan,
            'thn_lulus' => $request->thn_lulus,
        ]);

        if($alumni){
            //redirect dengan pesan sukses
            return redirect()->route('alumni.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('alumni.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $alumni = Alumni::find($id); 
        return view('alumni.detail', compact('alumni'));
    }

    public function edit(alumni $alumni)
    {
        return view('alumni.edit', compact('alumni'));
    }

    public function update(Request $request, alumni $alumni)
    {
        $this->validate($request, [
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'angkatan' => 'required',
            'thn_lulus' => 'required',
        ]);

        $alumni = Alumni::findOrFail($alumni->id);
        $alumni->update([
            'nisn' => $request->nisn,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'angkatan' => $request->angkatan,
            'thn_lulus' => $request->thn_lulus,
        ]);

        if($alumni){
            //redirect dengan pesan sukses
            return redirect()->route('alumni.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('alumni.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $alumnis = DB::table('alumnis')
            ->where('nisn', 'like', "%" . $keyword . "%")
            ->orWhere('nama_lengkap', 'like', "%" . $keyword . "%")
            ->orWhere('jk', 'like', "%" . $keyword . "%")
            ->orWhere('alamat', 'like', "%" . $keyword . "%")
            ->orWhere('no_hp', 'like', "%" . $keyword . "%")
            ->orWhere('angkatan', 'like', "%" . $keyword . "%")
            ->orWhere('thn_lulus', 'like', "%" . $keyword . "%")->paginate(10);
        return view('alumni.alumni_table', compact('alumnis'));
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
  
        $alumni->delete();
        if($alumni){
            //redirect dengan pesan sukses
            return redirect()->route('alumni.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('alumni.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function cetakpdf(){
        $alumni = Alumni::all();
 
    	$pdf = PDF::loadview('alumni.cetakpdf',['alumni'=>$alumni]);
    	return $pdf->stream('laporan-alumni.pdf');
    }
}
