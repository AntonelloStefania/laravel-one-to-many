<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types;

class PortfolioModel extends Model
{
    use HasFactory;
    protected $fillable = ['title','front_ender','back_ender','ui','ux','illustrator','image','description','link','type_id'];
    
    public function type(){ //<------------------------QUI HO CAMBIATO DA TYPES A TYPE PER FAR FUNZIONARE LA CHIAMATA CON $site->type->category
        return $this->belongsTo(Types::class);
    }

}
