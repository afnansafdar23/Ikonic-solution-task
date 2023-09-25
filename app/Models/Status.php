<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'suggestion',
        'sent',
        'received',
        'approved'
    ];

    public function user_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
