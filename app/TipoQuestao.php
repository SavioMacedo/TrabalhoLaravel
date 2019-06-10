<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoQuestao extends Model
{
    //
    public function questao()
    {
        return $this->hasMany(Questao::class);
    }
}
