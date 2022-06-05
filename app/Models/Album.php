<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    /**
     * permito atribuição em massa
     */
    protected $fillable = ['nome'];

    /**
     * retorna todas as faixas de um album.
     */
    public function tracks(){
        return $this->hasMany('App\Models\Track');
    }

}
