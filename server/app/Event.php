<?php

namespace App;
namespace APP\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'seat',
        'detail',
        'event_date',
        'created_at',
        'updated_at',
    ];
    public $timestamps = false;

}
