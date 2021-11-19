<?php

namespace App\Http\Controllers;

use App\Models\AsiProduct;
use App\Models\Donation;
use Illuminate\Http\Request;

class AsiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $getAllAsiProduct = AsiProduct::with('pemilik');
        $getAllDana = Donation::where('id', $id);

        return view('GetAsiProduct', compact('getAllAsiProduct'));
    }

    public function showDetailDashboardPendonorRequestAsi(Request $request)
    {
        $getInfoAsiProduct = AsiProduct::findOrFail($request->asiId);
        $getInfo = $getInfoAsiProduct->Users;
        $asiBoardId = $request->asiBoardId;

        return view('showDetailDashboardPendonorRequestAsi', compact('getInfo', 'asiBoardId'));
    }

    public function showDetailDashboardPendonorHistoriAsi(Request $request)
    {
        $getInfoAsiProduct = AsiProduct::findOrFail($request->asiId);
        $getInfo = $getInfoAsiProduct->Users;
        $asiBoardId = $request->asiBoardId;

        return view('showDetailDashboardPendonorHistoriAsi', compact('getInfo', 'asiBoardId'));
    }
    public function showDetailDashboardPendonorInProgressAsi(Request $request)
    {
        $getInfoAsiProduct = AsiProduct::findOrFail($request->asiId);
        $getInfo = $getInfoAsiProduct->Users;
        $asiBoardId = $request->asiBoardId;

        return view('showDetailDashboardPendonorInProgressAsi', compact('getInfo', 'asiBoardId'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\asi_product $asi_product
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAsiProductDetail = AsiProduct::where('id', $id)->first();

        return view('AsiDetail', compact($getAsiProductDetail, 'getAsiProductDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\asi_product $asi_product
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\asi_product  $asi_product
     *
     * @return \Illuminate\Http\Response
     */
    public function update($asi_product)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\asi_product $asi_product
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($asi_product)
    {
    }
}
