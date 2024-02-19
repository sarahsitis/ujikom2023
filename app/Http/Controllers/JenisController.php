<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Jenis';
        $data['jenis'] = Jenis::get();
        return view('jenis.index')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJenisRequest $request)
    {
        Jenis::create($request->all());
        return redirect('jenis')->with('success', 'Data jenis berhasil ditambahkan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenisRequest $request, $id)
    {
        Jenis::find($id)->update($request->all());
        return redirect('jenis')->with('success', 'Data jenis berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis)
    {
        //
    }
}
