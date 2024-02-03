<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type_name', 'created_at',
    ];
    public function products() {
        return $this->hasMany('App\Type');
    }
}
