<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employers extends Model
{
    use HasFactory;

    public function employees(): HasMany
    {
        return $this->hasMany(Employees::class);
    }

    public function assignments(): HasMany
    {
        return $this->hasMany(Assignments::class);
    }
}
