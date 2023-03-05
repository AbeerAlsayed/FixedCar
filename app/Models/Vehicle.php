<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = ['id'];
    protected $fillable=['plate_number','model','brand','year_of_manufacture'];
    public function clients():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function Reports():HasMany
    {
        return $this->hasMany(Report::class);
    }
}
