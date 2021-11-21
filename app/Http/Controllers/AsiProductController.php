<?php

namespace App\Http\Controllers;

use App\Models\AsiBoard;
use App\Models\AsiProduct;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function showDetailDashboardPendonorRequestAsi($idasiboard)
    {
       
        $getInfoAsiProductFromBoard = AsiBoard::findOrFail($idasiboard);
        $getInfoAsi = AsiProduct::findOrFail($getInfoAsiProductFromBoard->asi_product_id);
        foreach($getInfoAsi->Users as $data){
            if($data->pivot->progress==1 && $data->pivot->id==$idasiboard){
                $getInfo = $data;
            }
        }

        return view('showDetailDashboardPendonorRequestAsi', compact('getInfo', 'getInfoAsi', 'idasiboard'));
    }

    public function showDetailDashboardPendonorHistoriAsi(Request $request)
    {
        $getInfoAsiProduct = AsiProduct::findOrFail($request->asiId);
        $getInfo = $getInfoAsiProduct->Users;
        $asiBoardId = $request->asiBoardId;

        return view('showDetailDashboardPendonorHistoriAsi', compact('getInfo', 'asiBoardId'));
    }

    public function showDetailDashboardPendonorInProgressAsi($idasiboard)
    {
       
        $getInfoAsiProductFromBoard = AsiBoard::findOrFail($idasiboard);
        $getInfoAsi = AsiProduct::findOrFail($getInfoAsiProductFromBoard->asi_product_id);
        foreach($getInfoAsi->Users as $data){
            if($data->pivot->progress==0 && $data->pivot->id==$idasiboard){
                $getInfo = $data;
            }
        }

   
        return view('showDetailDashboardPendonorInProgressAsi', compact('getInfo', 'getInfoAsi', 'idasiboard'));
    }

    public function prosesPermintaanAsiRequestPendonor(Request $request)
    {
        
        $asiProduct = AsiProduct::findOrFail($request->asiId);
        $asiBoard = AsiBoard::findOrFail($request->asiBoardId);
        if (isset($_POST['terima'])) {
            $asiProduct->update(['quantityupdated' => $asiProduct->quantityupdated - $asiBoard->quantity_request]);
            $asiBoard->update(['progress' => 0]);
        } else {
            $asiBoard->update(['progress' => 3]);
        }

        return redirect()->route('dashboard-permintaan-donasi-asi');

       
    }
    public function prosesPermintaanAsiInProgressPendonor(Request $request)
    {
        $asiProduct = AsiProduct::findOrFail($request->asiId);
        $asiBoard = AsiBoard::findOrFail($request->asiBoardId);
  
            $asiProduct->update(['quantityupdated' => $asiProduct->quantityupdated + $asiBoard->quantity_request]);
            $asiBoard->update(['progress' => 3]);
        
        return redirect()->route('dashboard-permintaan-donasi-asi');
    }


    //////////////////////////////////////////RESIPIEN REQUEST ASI////////////
   

    public function  showDetailDashboardResipienRequestAsi($idasiboard)
    {
        $DataUser = User::findOrFail(auth()->user()->id); //array
       
        $getInfoAsiProductFromBoard = AsiBoard::findOrFail($idasiboard);
        $getInfoAsiBefore =  $DataUser->asiResipiens;
        foreach($getInfoAsiBefore as $data){
            if($data->pivot->progress==1 && $data->pivot->id==$idasiboard){
                $getInfo = $data;
            }
        }

   
        return view('showDetailDashboardResipienRequestAsi', compact('getInfo', 'idasiboard'));
    }
    public function  showDetailDashboardResipienInProgressAsi($idasiboard)
    {
        $DataUser = User::findOrFail(auth()->user()->id); //array
       
        $getInfoAsiProductFromBoard = AsiBoard::findOrFail($idasiboard);
        $getInfoAsiBefore =  $DataUser->asiResipiens;
        foreach($getInfoAsiBefore as $data){
            if($data->pivot->progress==0 && $data->pivot->id==$idasiboard){
                $getInfo = $data;
            }
        }

   
        return view('showDetailDashboardResipienInProgressAsi', compact('getInfo', 'idasiboard'));
    }
    public function  showDetailDashboardResipienHistoriAsi($idasiboard, $progress)
    {
        $DataUser = User::findOrFail(auth()->user()->id); //array
       
        $getInfoAsiProductFromBoard = AsiBoard::findOrFail($idasiboard);
        $getInfoAsiBefore =  $DataUser->asiResipiens;
        foreach($getInfoAsiBefore as $data){
            if($data->pivot->progress==$progress && $data->pivot->id==$idasiboard){
                $getInfo = $data;
            }
        }

   
        return view('showDetailDashboardResipienHistoriAsi', compact('getInfo', 'idasiboard'));
    }
    public function prosesPermintaanAsiRequestResipien(Request $request)
    {
        $asiProduct = AsiProduct::findOrFail($request->asiId);
        $asiBoard = AsiBoard::findOrFail($request->asiBoardId);

            $asiProduct->update(['quantityupdated' => $asiProduct->quantityupdated + $asiBoard->quantity_request]);
            $asiBoard->update(['progress' => 3]);

        return redirect()->route('dashboard-request-donasi-asi');

       
    }
    public function prosesPermintaanAsiInProgressResipien(Request $request)
    {
        $asiProduct = AsiProduct::findOrFail($request->asiId);
        $asiBoard = AsiBoard::findOrFail($request->asiBoardId);


        if (isset($_POST['batal'])) {
            $asiProduct->update(['quantityupdated' => $asiProduct->quantityupdated + $asiBoard->quantity_request]);
            $asiBoard->update(['progress' => 3]);
        } else {
            $asiBoard->update(['progress' => 2]);

            if($asiProduct->quantityupdated==0){
            AsiBoard::where('asi_product_id', '=', $request->asiId)->where('progress', '=', 1)
               ->update(['progress' => 3]);
           
           
            }
        }

      

        return redirect()->route('dashboard-request-donasi-asi');

       
    }
    ////////////////////////UPLOAD PRODUK ASIKU////////////////
    
    public function  showDetailDashboardDonorProdukAsi($idasi)
    {
        $DataASI = AsiProduct::findOrFail($idasi); //array

        return view('showDetailDashboardDonorProdukAsi', compact('DataASI'));
    }
   
    public function  prosesDonorProdukAsiBatal(Request $request)
    {
        $asiProduct = AsiProduct::findOrFail($request->asiId);

            if($asiProduct->status_persetujuan==1){
                AsiBoard::where('asi_product_id', '=', $request->asiId)->where('progress', '=', 1)
                ->update(['progress' => 3]);
            }

            $asiProduct->update(['status_persetujuan' => 3]);

        return redirect()->route('dashboard-pendonor-donasi-asi'); 
    }
    public function  showDetailDashboardDonorProdukHistoriAsi($idasi)
    {
        $DataASI = AsiProduct::findOrFail($idasi); //array

        return view('showDetailDashboardDonorProdukHistoriAsi', compact('DataASI'));
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
