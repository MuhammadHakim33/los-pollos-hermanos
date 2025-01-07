<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Menu::where('status', 'available')
            ->where('category', 'food')
            ->get();
        $drinks = Menu::where('status', 'available')
            ->where('category', 'drink')
            ->get();

        return view('admin.menu', [
            'foods' => $foods,
            'drinks' => $drinks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addMenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'nama_menu' => ['required'],
            'deskripsi' => ['required'],
            'harga' => ['required', 'numeric'],
            'status' => ['required'],
            'category' => ['required'],
        ]);

        $fileName = null;
        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $fileName);
        }

        Menu::create([
            'path_img' => $fileName,
            'name' => $request->nama_menu,
            'desc' => $request->deskripsi,
            'price' => $request->harga,
            'status' => $request->status,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.editMenu');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back();
    }
}
