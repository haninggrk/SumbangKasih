<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AsiProduct extends Model
{
    use HasFactory;

    protected $table = 'asi_products';
    protected $dates = ['tanggal_melahirkan'];

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function Users()//penerimaASI
    {

        $getArrayIdasiProduct_user=User::find(Auth::user()->id)->asiProducts;
        $arrayidasiProducts=array();

        foreach($getArrayIdasiProduct_user as $data){
            array_push($arrayidasiProducts, $data->id);
        }
        return $this->belongsToMany(User::class, 'asi_boards', 'asi_product_id', 'receiver_id')->withTimestamps()
        ->withPivot(['id','receiver_id','progress', 'quantity_request', 'courir_request', 'detail_address_resipien'])
        ->wherePivotIn('asi_product_id', $arrayidasiProducts);
    }
}
