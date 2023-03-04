<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function Center():HasOne
    {
        return $this->hasOne(Center::class);
    }

    public function SpareParts():BelongsToMany
    {
        return $this->belongsToMany(SparePart::class);
    }

    public function Users():hasMany
    {
        return $this->hasMany(User::class);
    }
}
