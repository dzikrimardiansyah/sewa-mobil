<?php

namespace App\Http\Controllers;

use App\Models\DetailMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
       $mobil = DetailMobil::all();
        return view('pages.detail-mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.detail-mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merek_mobil' => 'required','string','max:255',
            'model_mobil' => 'required','string','max:255',
            'no_plat' => 'required','string','max:255','unique:detail_user',
            'price_mobil' => 'required','string','max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192'
        ]);

        $image = $request->file('photo');
        $image->storeAs('public/assets-admin/images/file-mobil', $image->hashName());

      DetailMobil::create([
        'merek_mobil' => $request->merek_mobil,
        'model_mobil' => $request->model_mobil,
        'no_plat' => $request->no_plat,
        'price_mobil' => $request->price_mobil,
        'photo' => $image->hashName()
      ]);

       
        return redirect()->route('backsite.detail-mobil.index');
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
        //
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
    public function destroy(DetailMobil $detail_mobil)
    {
        Storage::delete('public/assets_admin/images/file-mobil/'.$detail_mobil->photo);
        
        $detail_mobil->forceDelete();

        return redirect()->route('pages.detail_mobil.index');
    }
}
