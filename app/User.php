<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'contactable_type', 
        'contactable_id', 'telefone', 'celular', 'enderecoCidade', 'enderecoEstado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';
    
    protected $with = ['contact'];

    public function contact()
    {
        return $this->morphTo('contact', 'contactable_type', 'contactable_id');
    }

    public function isEmpresa()
    {
        return $this->contactable_type == Empresa::class;
    }

    public function isCandidato()
    {
        return $this->contactable_type == Candidato::class;
    }

    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }

}



