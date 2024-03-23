<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CrudController extends Controller
{ 
    public function getDataFromDB(){
        $test = DB::select('select * from Module');
        return view("index", ['test' => $test]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $codeM = $request->input('codeM');
        $Titre = $request->input('Titre');
        $MH = $request->input('MH');

        DB::insert('insert into Module (codeM, Titre, MH) values (?, ?, ?)', [$codeM, $Titre, $MH]);
        return redirect()->route('index')->with('success', 'Module created successfully!');
    }

    public function edit($codeM)
    {
        $test = DB::select('select * from Module where codeM = ?', [$codeM]);
        return view('edit', ['test' => $test]);
    }

    public function update(Request $request, $codeM)
    {
    $Titre = $request->input('Titre');
    $MH = $request->input('MH');

    DB::update('update Module set Titre = ?, MH = ? where codeM = ?', [$Titre, $MH, $codeM]);

    return redirect()->route('index')->with('success', 'Module updated successfully!');
    }

    public function destroy($codeM)
    {
        $deleted = DB::delete('delete from Module where codeM = ?', [$codeM]);
        return redirect()->route('index')->with('success', 'Module deleted successfully!');
    }
    

}
