<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    
    public function user()
    {
        return $this->morphOne(User::class, 'contact', 'contactable_type', 'contactable_id');
    }
}
