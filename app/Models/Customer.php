<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        "name",
        "email",
        "password",
        "phone",
        "address",
    ];

    protected $hidden = [
        "password",
        "remember_token",
    ];

    public function shipment(){
        return $this->hasMany(Shipment::class);
    }

    public function inquiries(){
        return $this->hasMany(Inquiry::class);
    }
    
    public function activityLogs()
    {
        return $this->morphMany(ActivityLog::class, 'user');
    }
}
