<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

//
//    public function Inspections(): HasMany
//    {
//        return $this->hasMany(Inspection::class);
//    }

    public function Vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
//    public function vehicle_names()
//    {
//        $client=Client::all();
//
//        return $client->Vehicles->pluck('model')->implode(', ');
//    }
}
