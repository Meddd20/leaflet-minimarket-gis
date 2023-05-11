<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class product_category extends Model
{
    use HasFactory;

    public function product(): HasMany
    {
        return $this->hasMany(product::class);
    }
}
