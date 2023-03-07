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

    public function Center(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Center::class);
    }

    public function SpareParts():BelongsToMany
    {
        return $this->belongsToMany(SparePart::class,'warehouse_spare_part');
    }

    public function Users():hasMany
    {
        return $this->hasMany(User::class, 'warehouse_id');
    }
}
