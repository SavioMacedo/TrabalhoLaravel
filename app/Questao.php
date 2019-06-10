<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    //
    public function alternativa()
    {
        return $this->hasMany(Alternativa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tipoQuestao()
    {
        return $this->belongsTo(TipoQuestao::class);
    }
}
