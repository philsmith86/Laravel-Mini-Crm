<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'email', 'web'
    ];
    
    public function employee()
    {
       return $this->hasMany(Employee::class);
    }
}
