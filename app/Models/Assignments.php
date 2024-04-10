<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assignments extends Model
{
    use HasFactory;

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employers::class);
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Locations::class);
    }

    public function roles(): HasMany
    {
        return $this->roles(Role::class);
    }

    public function leaves(): HasMany
    {
        return $this->roles(Leaves::class);
    }
}
