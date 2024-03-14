<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infos;

class RessourceController extends Controller
{
    // private static function getData() {
    //     return [
    //         ['id' => 1, 'name' => 'abderrahim', 'age' => 24],
    //         ['id' => 2, 'name' => 'hmad', 'age' => 20],
    //         ['id' => 3, 'name' => '3bass', 'age' => 50]
    //     ];
    // }
    

    public function index()
    {
        return view("infos.index", [
            'data' => Infos::all()
        ]);
    }


    public function create()
    {
        return view('infos.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => ['required','integer']
        ]);

        $info = new Infos();

        $info->name = strip_tags($request->input("name"));
        $info->age = strip_tags($request->input("age"));

        $info->save();

        return redirect()->route('infos.index');
    }


    public function show(string $id)
    {
        return view('infos.show',[
            'data' => Infos::findOrFail($id)
        ]);
    }

    public function edit(string $id)
    {
        return view("infos.edit", [
            'data' => Infos::findOrFail($id)
        ]);
    }
    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => ['required','integer']
        ]);

        $to_update = Infos::findOrFail($id);

        $to_update->name = strip_tags($request->input("name"));
        $to_update->age = strip_tags($request->input("age"));
        $to_update->save();

        return redirect()->route('infos.show',$id);
    }


    public function destroy(string $id)
    {
        $to_delete = Infos::findOrFail($id);
        $to_delete->delete();
        return redirect()->route('infos.index');
    }
}
