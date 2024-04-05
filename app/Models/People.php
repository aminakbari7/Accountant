<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class People extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'codm',
        'birthday',
        'role_id',
        'rest',
        'address',
        'active',

    ];
    public function role(): BelongsTo
    {
        return $this->BelongsTo(role::class);
    }
    public function roles()
    {
        return $this->belongsToMany(role::class);
    }
}
