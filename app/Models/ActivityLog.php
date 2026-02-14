<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = ["user","action","description"];

    public function user(){
        return $this->morphTo();
    }
}
