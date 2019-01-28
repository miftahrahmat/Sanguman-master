<?php

namespace App\Models;

use App\User;
use App\Models\Order;
use App\Models\TakeLog;
use Illuminate\Database\Eloquent\Model;

class Portion extends Model
{
    protected $fillable = ['user_id', 'order_id', 'portion'];

    /**
     * Belongs To User
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Belongs To Order
     *
     * @return void
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Has Many Logs
     *
     * @return void
     */
    public function logs()
    {
        return $this->hasMany(TakeLog::class);
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
           ->diffForHumans();
    }
    
}
