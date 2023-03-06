<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function Bills():BelongsToMany{
        return $this->belongsToMany(Bill::class,'bill_service');
    }

    public function Centers():BelongsToMany
    {
        return $this->belongsToMany(Center::class,'center_service','center_id','service_id');
    }

    public function Reports():BelongsToMany
    {
        return $this->belongsToMany(Report::class);
    }
}
