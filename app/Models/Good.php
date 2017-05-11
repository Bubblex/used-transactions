<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //
    public function type() {
        return $this->belongsTo('App\Models\GoodType', 'goods_type_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
