<?php

namespace App\Http\Resources;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'employee_id' => $this->employee_id,
            'first_lastname' => $this->first_lastname,
            'first_name' => $this->first_name,
            'other_name' => $this->other_name,
            'identify_number' => $this->identify_number,
            'email' => $this->email,
            'admission_date' => $this->admission_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'identify' => new IdentifyResource($this->whenLoaded('identify')),
            'country' => new CountryResource($this->whenLoaded('country')),
            'department' => new DepartmentsResource($this->whenLoaded('departments')),
            'status' => new StatusResource($this->whenLoaded('status'))
        ];
    }
}
