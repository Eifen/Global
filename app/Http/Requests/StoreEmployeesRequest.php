<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeesRequest extends FormRequest
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
            //Validamos todos los parametros
            'firstLastName' => ['required', 'regex:/^[A-Za-z]+$/', 'max:20'],
            'firstName' => ['required', 'regex:/^[A-Za-z]+$/', 'max:20'],
            'otherName' => ['nullable', 'regex:/^[A-Za-z]+$/', 'max:50'],
            'countryId' => ['required'],
            'identifyId' => ['required'],
            'identifyNumber' => ['required', 'regex:/^[a-zA-Z0-9-]+$/', 'max:20'],
            'email' => ['required', 'max:300', 'regex:/^[a-zA-Z]+\.[a-zA-Z]+\.\d+@global\.com(\.[a-zA-Z]{2,})?$/', Rule::unique('employees')],
            'admissionDate' => ['required', 'date', 'before_or_equal:' . now()->format('Y-m-d')],
            'departmentId' => ['required'],
            'statusId' => ['required'],
        ];
    }

    //Creamos una funcion para hacer los cambios en las columnas
    protected function prepareForValidation()
    {
        $this->merge([
            'firstLastName' => $this->first_lastname,
            'firstName' => $this->first_name,
            'otherName' => $this->other_name,
            'countryId' => $this->country_id,
            'identifyId' => $this->identify_id,
            'identifyNumber' => $this->identify_number,
            'admissionDate' => $this->admission_date,
            'departmentId' => $this->department_id,
            'statusId' => $this->status_id
        ]);
    }
}
