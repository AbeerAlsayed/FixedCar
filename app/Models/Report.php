<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }

    public function inspections(): BelongsTo
    {
        return $this->belongsTo(Inspection::class,'inspection_id','id');
    }

    public function SpareParts(): BelongsTo
    {
        return $this->belongsTo(SparePart::class,'spare_part_id');
    }

    public function Services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class,'report_service');
    }

    public function Users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function  Bill(): HasOne
    {
        return $this->hasOne(Bill::class , 'report_id');
    }
}
