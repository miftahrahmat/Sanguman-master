<?php

namespace App;

use Cache;
use App\Models\Chef;
use App\Models\Portion;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
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
