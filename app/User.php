<?php

namespace App;

use Cache;
use App\Models\Chef;
use App\Models\Portion;
use App\Models\lapor;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Belongs To Portions
     *
     * @return void
     */
    public function portions()
    {
        return $this->hasMany(Portion::class);
    }

    public function laporans()
    {
        return $this->hasMany(lapor::class);
    }

    public function chefs()
    {
        return $this->hasMany(Chef::class);
    }

    public function getUpdatedAtAttribute()
    {
         return \Carbon\Carbon::parse($this->attributes['updated_at'])
       ->diffForHumans();
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
}
