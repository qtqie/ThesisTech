<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Platinum extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_ic', 'p_gender', 'p_religion', 'p_race', 'p_citizenship',
        'p_address', 'p_hp_no', 'p_fb_name', 'p_edu_information',
        'p_pakej', 'p_batch_no', 'p_cluster_of_study'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
