<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'type' => ['required', 'string', 'in:pipe,fitting'],
            'ar_title' => ['required', 'string', 'min:1', 'max:255'],
            'en_title' => ['required', 'string', 'min:1', 'max:255'],
            'long' => ['nullable', 'string', 'min:1', 'max:255'],
            'cost' => ['required', 'numeric'],
            'percentage' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],

        ];
    }
}
