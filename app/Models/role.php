<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class role extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    public function people(): HasOne
    {
        return $this->hasOne(People::class);
    }
    public function boxrole(): HasOne
    {
        return $this->hasOne(Boxrole::class);
    }
}
