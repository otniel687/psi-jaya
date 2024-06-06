<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'homestays_id', 'check_in_date', 'check_out_date',
        'peoples', 'price', 'total', 'bukti_bayar',
    ];

    public function homestay()
    {
        return $this->belongsTo(Homestays::class, 'homestays_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

