<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsiProduct extends Model
{
    use HasFactory;

    protected $table = 'asi_products';

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function Users()
    {
        return $this->belongsToMany(User::class, 'asi_boards', 'asi_product_id', 'receiver_id');
    }
}
