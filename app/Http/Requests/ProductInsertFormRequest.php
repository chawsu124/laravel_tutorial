<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductInsertFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // change true if you want to test your product insert form
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // write required name of fields in product insert form
            'title'=>'required',
            'price'=>'required',
            'description'=>'required',
            'img'=>'required',
        ];
    }
}
