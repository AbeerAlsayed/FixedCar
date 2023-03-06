<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function vehicles(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class,'vehicles_id');
    }

    public function inspections(): BelongsTo
    {
        return $this->belongsTo(Inspection::class,'inspections_id');
    }

    public function SpareParts(): BelongsTo
    {
        return $this->belongsTo(SparePart::class,'spare_parts_id');
    }

    public function Services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class,'report_service');
    }

    public function Users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function  Bill(): BelongsTo
    {
        return $this->belongsTo(Bill::class,'bill_id');
    }
}
