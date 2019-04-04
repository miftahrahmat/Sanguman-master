<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Portion;

class lapor extends Model
{
    protected $fillable = ['user_id', 'portion'];
    protected $table = 'laporans';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
