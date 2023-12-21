<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use App\Http\Requests\StoreMahasiswaModelRequest;
use App\Http\Requests\UpdateMahasiswaModelRequest;

class MahasiswaModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMahasiswaModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMahasiswaModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMahasiswaModelRequest  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMahasiswaModelRequest $request, MahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MahasiswaModel $mahasiswaModel)
    {
        //
    }
}
