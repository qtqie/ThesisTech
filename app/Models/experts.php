<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experts extends Model
{
    use HasFactory;

    protected $primaryKey = 'E_ID';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'E_Name', 'E_Email', 'E_PhoneNum', 'E_Gender', 'E_University', 'E_Address', 'E_Publication', 'E_Paper', 'E_Topic',
    ];

    // If the primary key is auto-incrementing
    public $incrementing = true;

    // The data type of the primary key
    protected $keyType = 'int';
}
