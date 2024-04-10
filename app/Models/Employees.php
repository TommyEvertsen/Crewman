<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'ZID',
        'id',
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employers::class);
    }

    public function pastAndFutureEmployer(): HasMany
    {
        return $this->hasMany(PastAndFutureEmployer::class);
    }

    public function assignments(): HasManyThrough
    {
        return $this->hasManyThrough(Assignments::class, Employers::class);
    }

    public function roles(): HasManyThrough
    {
        return $this->hasManyThrough(Assignments::class, Role::class);
    }

    public function leaves(): HasManyThrough
    {
        return $this->hasManyThrough(Assignments::class, Leaves::class);
    }
}
