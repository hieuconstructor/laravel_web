<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'name',
    ];

    public function getDateCreatedAtAttribute()
    {
        return $this->created_at->format('Y-m-d');
        //return date_format(date_create($this->created_at), 'Y-m-d');
    }
}
