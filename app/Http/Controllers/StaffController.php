<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::latest()->paginate(10);
        return view('staff.staff_table', compact('staffs'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required'
        ]);

        $staff = Staff::create([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
        ]);

        if($staff){
            //redirect dengan pesan sukses
            return redirect()->route('staff.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('staff.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show($id)
    {
        $staff = Staff::find($id); 
        return view('staff.detail', compact('staff'));
    }

    public function edit(staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, staff $staff)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required'
        ]);

        $staff = Staff::findOrFail($staff->id);
        $staff->update([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
        ]);

        if($staff){
            //redirect dengan pesan sukses
            return redirect()->route('staff.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('staff.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $staffs = DB::table('staffs')
            ->where('nip', 'like', "%" . $keyword . "%")
            ->orWhere('nama_lengkap', 'like', "%" . $keyword . "%")
            ->orWhere('jk', 'like', "%" . $keyword . "%")
            ->orWhere('alamat', 'like', "%" . $keyword . "%")
            ->orWhere('jabatan', 'like', "%" . $keyword . "%")->paginate(10);
        return view('staff.staff_table', compact('staffs'));
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
  
        $staff->delete();
        if($staff){
            //redirect dengan pesan sukses
            return redirect()->route('staff.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('staff.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function cetakpdf(){
        $staff = Staff::all();
 
    	$pdf = PDF::loadview('staff.cetakpdf',['staff'=>$staff]);
    	return $pdf->stream('laporan-staff.pdf');
    }
}
