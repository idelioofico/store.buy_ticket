<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='events';


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function province(){

        return $this->belongsTo(Province::class);
    }

    public function event_type(){

        return $this->belongsTo(EventType::class);
    }

    public function topic(){

        return $this->belongsTo(EventTopic::class);
    }


    public function producer(){

        return $this->belongsTo(Company::class,'company_id','id');
    }

}
