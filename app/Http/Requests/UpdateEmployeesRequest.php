<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeesRequest extends FormRequest
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
            //Validamos todos los parametros en caso que existan
            'firstLastName' => ['sometimes', 'regex:/^[A-Za-z]+$/', 'max:20'],
            'firstName' => ['sometimes', 'regex:/^[A-Za-z]+$/', 'max:20'],
            'otherName' => ['nullable', 'regex:/^[A-Za-z]+$/', 'max:50'],
            'countryId' => ['sometimes'],
            'identifyId' => ['sometimes'],
            'identifyNumber' => ['sometimes', 'regex:/^[a-zA-Z0-9-]+$/'],
            'email' => ['sometimes', 'max:300', 'regex:/^[a-zA-Z]+\.[a-zA-Z]+\.\d+@global\.com(\.[a-zA-Z]{2,})?$/', Rule::unique('employees')],
            'admissionDate' => ['sometimes', 'date', 'before_or_equal:' . now()->format('Y-m-d')],
            'departmentId' => ['sometimes'],
            'statusId' => ['sometimes'],
        ];
    }

    //Creamos una funcion para hacer los cambios en las columnas
    protected function prepareForValidation()
    {
        if ($this->first_lastname) $this->merge(['firstLastName' => $this->first_lastname]);
        if ($this->first_name) $this->merge(['firstName' => $this->first_name]);
        if ($this->other_name) $this->merge(['otherName' => $this->other_name]);
        if ($this->country_id) $this->merge(['countryId' => $this->country_id]);
        if ($this->identify_id) $this->merge(['identifyId' => $this->identify_id]);
        if ($this->identify_number) $this->merge(['identifyNumber' => $this->identify_number]);
        if ($this->admission_date) $this->merge(['admissionDate' => $this->admission_date]);
        if ($this->department_id) $this->merge(['departmentId' => $this->department_id]);
        if ($this->status_id) $this->merge(['statusId' => $this->status_id]);
    }
}
