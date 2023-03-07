<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bill extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = ['id'];

    public function SpareParts():BelongsToMany
    {
        return $this->belongsToMany(SparePart::class,'bill_spare_part');
    }

    public function Services():BelongsToMany
    {
        return $this->belongsToMany(Service::class,'bill_service');
    }

    public function Report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }
}
