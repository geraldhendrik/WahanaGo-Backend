<?php
namespace App\Http\Controllers;

use App\Models\Wahana;
use Illuminate\Http\Request;

class WahanaController extends Controller
{
    public function index()
    {
        return response()->json(Wahana::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'harga' => 'required|integer|min:0',
        ]);

        $wahana = Wahana::create($data);

        return response()->json([
            'pesan' => 'Wahana berhasil ditambahkan!',
            'data' => $wahana
        ], 201);
    }
}
