<?php

namespace App\Models;

use App\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $fillable = ['order_id','user_id', 'picked_at'];

    protected $dates = ['picked_at'];

    /**
     * Belongs To Order
     *
     * @return void
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
