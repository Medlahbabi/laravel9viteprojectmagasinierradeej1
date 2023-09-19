<?php

namespace App\Http\Requests;

use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class Demande_de_sortieStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ref_art' => ['required'],
            'ref_sort' => ['required'],
            'qte_sort' => ['required'],
            'date_demande' => ['required', 'date', new DateBetween, new TimeBetween],
            'date_sort'=> ['required', 'date', new DateBetween, new TimeBetween]

        ];
    }
}
