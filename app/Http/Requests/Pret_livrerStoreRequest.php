<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pret_livrerStoreRequest extends FormRequest
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
            'name_art_pretli' => ['required'],
            'qte_pretli' => ['required'],
            'date_pretli' => ['required'],

        ];

    }
}
