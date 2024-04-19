<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assignments extends Model
{
    protected $fillable = [
        'name',
    ];

    use HasFactory;

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employers::class);
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Locations::class);
    }

    public function assignmentroles(): HasMany
    {
        return $this->hasMany(Role::class);
    }

    public function assignmentleaves(): HasMany
    {
        return $this->hasMany(Leaves::class);
    }
}
