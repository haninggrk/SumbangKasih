<?php

namespace App\Http\Controllers;

use App\Models\asi_product;
use App\Models\AsiBoard;
use App\Models\AsiProduct;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

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
    public function showDetailDashboardRequestAsi(Request $request)
    {
        $getDetailBoard= AsiBoard::find($request->idBoard)->first();
        $getDetailProduct= AsiProduct::find($request->idProductAsi)->first();
        $getDetailUserPenerima= AsiProduct::find($request->idUserpenerima)->first();
       
       

        return view("ViewDetailDashboardRequest", [
            'DataProdukAsi'=>$getDetailProduct,
            'DataBoard'=>$getDetailBoard,
            'DataPenerima'=>$getDetailUserPenerima
        ]);
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
