<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prepartion_panier;
use App\Models\Livrer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pret_livrer extends Model
{
    use HasFactory;
    protected $fillable = ['name_art_pretli', 'qte_pretli','date_pretli'];
    protected $dates = [
        'date_pretli'
    ];
    public function prepartion_paniers()
    {
        return $this->BelongsTo(Prepartion_panier::class);
    }
    public function livrers()
    {
        return $this->BelongsTo(Livrer::class);
    }
}
