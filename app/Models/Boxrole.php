<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits
class Boxrole extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id',
        'Box_id',
        'active',

        
    ];
    public function role(): BelongsTo
    {
        return $this->BelongsTo(role::class);
    }
}
