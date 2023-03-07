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
<<<<<<< HEAD
        return $this->belongsToMany(Center::class,'center_service');
=======
        return $this->belongsToMany(Center::class,'center_service','center_id','service_id');
>>>>>>> 1483caea70734846ee0dcad5e57c204c0c167e83
    }

    public function Reports():BelongsToMany
    {
        return $this->belongsToMany(Report::class,'report_service');
    }
}
