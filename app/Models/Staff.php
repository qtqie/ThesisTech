<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $fillable = [
        'user_id','s_ic', 's_gender', 's_religion', 's_race', 's_citizenship',
        's_address', 's_hp_no','s_department','s_position'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
