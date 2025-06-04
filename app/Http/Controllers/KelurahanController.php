<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahan = Kelurahan::all();

        return view("kelurahan.index", compact("kelurahan"));
    }

    public function create()
    {
        return view("kelurahan.create");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
           "nama" => "required|min:3|max:255",
           "kecamatan" => "required|min:3|max:255"
        ]);
        Kelurahan::create($data);

        return redirect(route("kelurahan.index"));
    }

    public function edit(string $id)
    {
        $kelurahan = Kelurahan::find($id);

        return view("kelurahan.edit", compact("kelurahan"));
    }
    
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
           "nama" => "required|min:3|max:255",
           "kecamatan" => "required|min:3|max:255"
        ]);
        $kelurahan = Kelurahan::find($id);

        $kelurahan->update($data);
        return redirect(route("kelurahan.index"));
    }

    public function destroy(string $id)
    {
        Kelurahan::find($id)->delete();

        return redirect(route("kelurahan.index"));
    }
}
