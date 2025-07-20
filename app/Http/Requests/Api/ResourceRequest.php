<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ResourceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'file_name' => 'required',
            'manufacturer' => 'required',
            'model' => 'required',
            'serial_number' => 'required',
            'acquisition_date' => 'required',
        ];
    }

    public function messages(): array 
    {
        return[
            'file_name.required' => 'Campo nome é obrigatório!',
            'manufacturer.required' => 'Campo é obrigatório!',
            'model.required' => 'Campo é obrigatório!',
            'serial_number.required' => 'Campo é obrigatório!',
            'acquisition_date.required' => 'Campo é obrigatório!',
        ];
    }
}
