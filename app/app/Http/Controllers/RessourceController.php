<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RessourceController extends Controller
{
    private static function getData() {
        return [
            ['id' => 1, 'name' => 'abderrahim', 'age' => 24],
            ['id' => 2, 'name' => 'hmad', 'age' => 20],
            ['id' => 3, 'name' => '3bass', 'age' => 50]
        ];
    }
    

    public function index()
    {
        return view("infos.index", [
            'data' => self::getData()
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        $data = self::getData();
        $getId = array_search($id, array_column($data, 'id'));
        if($getId === false){
            abort(404);
        };
        return view('infos.show',[
            'data' => $data[$getId]
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
