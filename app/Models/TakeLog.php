<?php

namespace App\Models;

use App\Models\Portion;
use Illuminate\Database\Eloquent\Model;

class TakeLog extends Model
{
    protected $fillable = ['portion_id','taked_at', 'portion'];

    protected $dates = ['taked_at'];

    /**
     * Belongs Portion
     */
    public function portion()
    {
        return $this->belongsTo(Portion::class);
    }

    public function getUpdatedAtAttribute()
    {
         return \Carbon\Carbon::parse($this->attributes['created_at'])
       ->diffForHumans();
    }

    // public static function boot()
    // {
    //     static::saved(function ($TakeLog) {
    //         $takelog = new TakeLog();
    //         $takelog->portion_id = $TakeLog;
    //         $takelog->portion = $TakeLog;
    //         $takelog->save();  
    //     });

    //     parent::boot();
    // }
}
