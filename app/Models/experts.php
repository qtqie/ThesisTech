<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experts extends Model
{
    use HasFactory;

    protected $fillable = [
    'E_ID',
    'E_Name',
    'E_Email',
    'E_Gender',
    'E_Address',
    'E_PhoneNum',
    'E_University',
   

    ];
}
