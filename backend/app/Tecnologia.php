<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Profissional;

class Tecnologia extends Model
{
    protected$table = 'tecnologia';

    public function profissionais(){
        return $this->belongsToMany('App\Profissional', 'profissionais_tecnologia', 'tecnologia_id', 'profissionais_id'); //(Profissional::class)coloca Use lá em cima(obrigatório importar o model)
    }
}
