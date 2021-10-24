<?php

namespace App\Http\Controllers;

use App\Models\asi_product;
use App\Models\AsiProduct;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAllAsiProduct=AsiProduct::all();
        $getAllDana=Donation::all();
        return view('GetAsiProduct', compact("getAllAsiProduct"));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asi_product  $asi_product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAsiProductDetail=AsiProduct::where('id', $id)->first();
        return view("AsiDetail", compact($getAsiProductDetail, "getAsiProductDetail"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asi_product  $asi_product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asi_product  $asi_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asi_product $asi_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asi_product  $asi_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(asi_product $asi_product)
    {
        //
    }
}
