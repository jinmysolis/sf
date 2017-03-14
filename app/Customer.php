<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
       'dni', 'name', 'last_name', 'address', 'phone', 'mobile', 'email',
    ];
    
    protected $appends=['full_name'];
    
    public function getFullNameAttribute()
    {
        return trim($this->name). ''.trim($this->last_name);
    }
}

 