<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ["name ","email ","message ","customer_id ","is_read "];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
