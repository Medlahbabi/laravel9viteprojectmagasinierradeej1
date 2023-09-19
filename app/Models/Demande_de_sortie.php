<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Demande_de_sorties extends Model
{
    use HasFactory;
    protected $fillable = ['ref_art', 'ref_sort', 'qte_sort', 'date_demande','date_sort'];
    protected $dates = [
        'date_demande',
        'date_sort'
    ];

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }

}
