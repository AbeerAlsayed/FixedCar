<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Http\Request;

class Inspection extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

//    public function client(): BelongsTo
//    {
//        return $this->belongsTo(Client::class, 'client_id');
//    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function Center(): BelongsTo
    {
        return $this->belongsTo(Center::class,'center_id');
    }

    public function Reports(): hasOne
    {
        return $this->hasOne(Report::class );
    }

}
