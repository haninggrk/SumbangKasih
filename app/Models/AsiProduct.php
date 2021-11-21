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
    protected $guarded = ['id'];

   
    

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Users()//penerimaASI
    {
        return $this->belongsToMany(User::class, 'asi_boards', 'asi_product_id', 'receiver_id')
        ->withPivot(['id', 'progress', 'quantity_request', 'courir_request', 'detail_address_resipien', 'created_at', 'updated_at']);
    }
}
