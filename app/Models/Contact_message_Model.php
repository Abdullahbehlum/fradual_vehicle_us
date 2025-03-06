<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_message_Model extends Model
{
    protected $table = "contact";
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'company',
        'vin',
        'message'
    ];
    public $timestamps = true;
}
