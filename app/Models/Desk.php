<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Desk extends Model
{
    /** @use HasFactory<\Database\Factories\DeskFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function lists():HasMany
    {
        return $this->hasMany(DeskList::class);
    }
}
