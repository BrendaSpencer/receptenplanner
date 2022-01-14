<?php

namespace App\Models;

use App\Models\Recept;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceptCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam'
    ];

    public function recepten(){
        return $this->belongsToMany(Recept::class, 'categorie_lijst','recept_Id','categorie_Id');
    }
}
