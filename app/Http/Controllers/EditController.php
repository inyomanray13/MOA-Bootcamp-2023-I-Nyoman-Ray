<?php

namespace App\Http\Controllers;

use App\Models\Edit;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index (){

        $data = Edit::all();
        return view('jobmanagement', compact('data'));

    }

    public function tambahjob (){
        return view('tambahjob');
    }

    public function insertdata(Request $request){
        Edit::create($request->all());
        return redirect()->route('job');
    }

    public function tampilkandata($id){
        $data = Edit::find($id);
        //dd($data);

        return view('tampildata', compact('data'));

    }

    public function updatedata(Request $request, $id){
        $data = Edit::find($id);
        $data->update($request->all());

        return redirect()->route('job');
    }

    public function delete($id){
        $data = Edit::find($id);
        $data->delete();
        return redirect()->route('job');

    }

}
