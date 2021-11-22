<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getIsAdminAttribute($value)
    {
        return 99 === $this->user_type;
    }

    public function asiResipiens()//ogin sebagai peminta asi
    {
        return $this->belongsToMany(AsiProduct::class, 'asi_boards', 'receiver_id', 'asi_product_id')
        ->withPivot(['id', 'progress', 'quantity_request', 'courir_request', 'detail_address_resipien', 'created_at', 'updated_at']);
    }

    public function asiProducts()
    {
        return $this->hasMany(AsiProduct::class);
    }

    //public function receiverAsiProduct()
    //{//
    // return $this->hasMany(User::class, 'receiver_id');
    //}

    public function receiverInfo()
    {
        return $this->hasOne(ReceiverInfo::class);
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    protected function defaultProfilePhotoUrl()
    {
        return 'https://ui-avatars.com/api/?name='.urlencode($this->name).'&color=EF4136&background=EBF4FF';
    }

    public function userMessages()
    {
        return $this->belongsToMany(User::class, 'messages', 'receiver_id', 'user_id')
        ->withPivot(['id', 'message', 'is_seen', 'created_at', 'updated_at']);
    }

    public function receiverMessages()
    {
        return $this->belongsToMany(User::class, 'messages', 'user_id', 'receiver_id')
        ->withPivot(['id', 'message', 'is_seen', 'created_at', 'updated_at']);
    }
}
