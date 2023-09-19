<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pret_livrer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prepartion_panier extends Model
{
    use HasFactory;
    protected $fillable = ['name_art_pretpa', 'qte_pretpa','date_pretpa'];
    protected $dates = [
        'date_pretpa'
    ];
    public function pret_livrers()
    {
        return $this->BelongsTo(Pret_livrer::class);
    }
}
