<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class minimarket extends Model
{
    use HasFactory;

    public function facility(): HasMany
    {
        return $this->hasMany(minimarket_facility::class);
    }

    public function picture(): HasMany
    {
        return $this->hasMany(picture::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(product::class);
    }

    public function supplier(): HasMany
    {
        return $this->hasMany(supplier::class);
    }

}
