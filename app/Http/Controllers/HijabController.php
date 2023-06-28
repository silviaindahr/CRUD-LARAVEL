<?php

namespace App\Http\Controllers;

use App\Models\Hijab;
use Illuminate\Http\Request;

class HijabController extends Controller
{
    public function index(){
        $hijab = Hijab::all();
        return view('hijab.index',compact(['hijab']));
    }

    public function create()
    {
        return view('hijab.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Hijab::create($request->except(['_token','submit']));
        return redirect('/hijab');
    }

    public function edit($id)
    {
        $hijab = Hijab::find($id);
        return view('hijab.edit',compact(['hijab']));
    }

    public function update($id, Request $request){
        $hijab = Hijab::find($id);
        $hijab->update($request->except(['_token','submit']));
        return redirect('/hijab');
    }

    public function destroy($id){
        $hijab = Hijab::find($id);
        $hijab->delete();
        return redirect('/hijab');
    }
}
