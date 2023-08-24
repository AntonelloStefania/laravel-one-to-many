<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model
{
    use HasFactory;
    protected $fillable = ['title','front_ender','back_ender','ui','ux','illustrator','image','description','link'];
}
