<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experts extends Model
{
    use HasFactory;

    protected $table = 'experts';
    protected $primaryKey = 'id'; // This should match your migration primary key
    
    protected $fillable = [
        'E_Name',
        'E_Email',
        'E_Gender',
        'E_Address',
        'E_PhoneNum',
        'E_University',
        'E_Publication',
        'E_Paper',
        'E_Topic',
    ];
}
