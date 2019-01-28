<?php

namespace App\Models;

use App\Models\Chef;
use App\Models\Portion;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total_portion', 'cooked_at'];

    protected $dates = ['cooked_at'];

    /**
     * Has Many Portions
     *
     * @return void
     */
    public function portions()
    {
        return $this->hasMany(Portion::class);
    }

    /**
     * Has Many Chefs
     *
     * @return void
     */
    public function chefs()
    {
        return $this->hasMany(Chef::class);
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['cooked_at'])
           ->format('d F Y H:i');
    }
}
