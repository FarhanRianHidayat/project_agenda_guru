<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){
        $data = Agenda::all();
        return view('agenda/agenda', compact('data'));
    }
    
    public function create(){
        return view('agenda/tambahdataagenda');
    }

    public function store(Request $request){
        $this ->validate($request, [
            'namaguru' => 'required',
            'matapelajaran' => 'required',
            'materipelajaran' => 'required',
            'jampelajaran' => 'required',
            'absensi' => 'required',
            'kelas' => 'required',
            'jenispembelajaran' => 'required',
            'linkpembelajaran' => 'required',
            'dokumentasi' => 'required',
            'keterangan' => 'required'
        ]);
        $data = agenda::create($request->all());
        if($request->hasfile('dokumentasi')){
            $request->file('dokumentasi')->move('fotoagenda/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect(route('agenda'));
    }

        public function tampilan($id){
        $data = agenda::find($id);
        return view('agenda/editdataagenda', compact('data'));
    }

    public function update(Request $request,$id){
        $data = agenda::find($id);
        $data->update($request->all());
        return redirect()->route('agenda');
    }

    public function destroy($id){
        $data = agenda::find($id);
        $data->delete();
        return redirect()->route('agenda');
    }

}
