<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrerStoreRequest extends FormRequest
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
            'nom_art_liv' => ['required'],
            'qte_liv' => ['required'],
            'date_liv' => ['required'],

        ];

    }
}
