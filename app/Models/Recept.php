<?php

namespace App\Models;

use App\Models\ReceptCategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recept extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'beschrijving',
        'voorbereiding',
        'recept',
        'duurtijd',
        'moeilijkheid',
        'user_Id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function receptCategorien(){
        return $this->belongsToMany(ReceptCategorie::class, 'categorie_lijst','recept_Id','categorie_Id');
    }
}
