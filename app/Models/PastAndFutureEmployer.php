<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PastAndFutureEmployer extends Model
{
    use HasFactory;

    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employees::class);
    }
}
