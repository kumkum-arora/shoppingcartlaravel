<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    public $timestamps = false;

    function product()
    {
        return $this->belongsTo(product::class);
    }
    function login()
    {
        return $this->belongsTo(login::class);
    }
}
