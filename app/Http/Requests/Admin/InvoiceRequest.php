<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
            'type' => ['required', 'string', 'in:invoice,quotation,delivery'],
            'discount' => ['nullable', 'numeric'],
            'date' => ['required', 'date'],
            'image' => ['nullable', 'string', 'min:1', 'max:255'],
            'user_id' => ['nullable', 'exists:users,id'],
            'client_id' => ['nullable', 'exists:clients,id'],
            'created_by' => ['nullable', 'exists:admins,id'],
            'update_by' => ['nullable', 'exists:admins,id']

        ];
    }
}
