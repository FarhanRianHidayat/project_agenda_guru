<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        $data = Guru::all();
        return view('guru/guru', compact('data'));
    }
    
    public function create(){
        return view('guru/tambahdataguru');
    }

    public function store(Request $request){
        $this ->validate($request, [
            'nama' => 'required',
            'nikguru' => 'required',
            'matapelajarann' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        guru::create($request->all());
        return redirect(route('guru'));
    }

        public function tampilan($id){
        $data = guru::find($id);
        return view('guru/editdataguru', compact('data'));
    }

    public function update(Request $request,$id){
        $data = guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru');
    }

    public function destroy($id){
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
}
