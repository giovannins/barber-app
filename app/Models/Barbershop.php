<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barbershop extends Model
{
    /** @use HasFactory<\Database\Factories\BarbershopFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'employee_limit',
        'banner',
        'icon',
        'color',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
