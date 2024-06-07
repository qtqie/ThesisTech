<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mentor extends Model
{
    use HasFactory;
    
    protected $table = 'mentors';

    protected $fillable = [
        'user_id','m_ic', 'm_gender', 'm_religion', 'm_race', 'm_citizenship',
        'm_address', 'm_hp_no',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
