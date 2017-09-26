<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidatos';
    
    public function user()
    {
        return $this->morphOne(User::class, 'contact', 'contactable_type', 'contactable_id');
    }
}
