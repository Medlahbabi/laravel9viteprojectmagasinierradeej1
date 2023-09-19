<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'image_art' => ['required', 'image_art'],
            'description_art' => ['required'],
            'name_art ' => ['required'],
            'gender_art' => ['required'],
            'price_art' => ['required'],
            'stock_quantity_art' => ['required'],
            'quantity_output_art' => ['required'],
            'minimum_quantity_art' => ['required'],
        ];

    }
}
