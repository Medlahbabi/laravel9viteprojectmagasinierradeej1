<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pret_livrer;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['nom_art_liv','qte_liv','date_liv'];
    protected $dates = [
        'date_liv'
    ];

    public function pret_livrers()
    {
        return $this->HasMany(Pret_livrer::class);
    }
}
