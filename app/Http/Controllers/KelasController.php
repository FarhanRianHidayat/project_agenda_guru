<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;


class KelasController extends Controller
{
    public function index(){
        $data = Kelas::all();
        return view('kelas/kelas', compact('data'));
    }
    
    public function create(){
        return view('kelas/tambahdatakelas');
    }

    public function store(Request $request){
        $this ->validate($request, [
            'walikelas' => 'required',
            'kelass' => 'required',
        ]);
        kelas::create($request->all());
        return redirect(route('kelas'));
        
    }

        public function tampilan($id){
        $data = kelas::find($id);
        return view('kelas/editdatakelas', compact('data'));
    }

    public function update(Request $request,$id){
        $data = kelas::find($id);
        $data->update($request->all());
        return redirect()->route('kelas');
    }

    public function destroy($id){
        $data = kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');
    }
}
