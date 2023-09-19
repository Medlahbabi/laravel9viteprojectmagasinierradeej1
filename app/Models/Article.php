<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demande_de_sortie;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['ref_art', 'name_art', 'gender_art','description_art','price_art','stock_quantity_art','quantity_output_art','minimum_quantity_art','image_art'];

    public function demande_de_sorties()
    {
        return $this->HasMany(Demande_de_sortie::class);
    }
}

