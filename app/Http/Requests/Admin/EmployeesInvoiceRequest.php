<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesInvoiceRequest extends FormRequest
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
            'date' => ['nullable', 'date'],
            'project_name' => ['nullable', 'string', 'min:1', 'max:255'],
            'invoice_image' => ['nullable', 'string', 'min:1', 'max:255'],
            'price' => ['required', 'string', 'min:1', 'max:255'],
            'type' => ['required', 'string', 'in:income,outcome'],
            'employee_id' => ['required', 'exists:employees,id'],
            'notes' => ['nullable', 'string', 'min:1', 'max:255']

        ];
    }
}
