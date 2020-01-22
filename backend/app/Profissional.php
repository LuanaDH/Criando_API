<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected$table = 'profissionais';

    public function tecnologia(){
        return $this->hasMany('App\Tecnologia', 'profissionais_tecnologia', 'profissionais_id', 'tecnologia_id'); 
    }
}
