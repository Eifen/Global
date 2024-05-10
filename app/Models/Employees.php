<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employees extends Model
{
    use HasFactory;
    protected $primaryKey = 'employee_id';
    protected $fillable = [
        'first_lastname',
        'first_name',
        'other_name',
        'country_id',
        'identify_id',
        'identify_number',
        'email',
        'admission_date',
        'department_id',
        'status_id'
    ];
    protected $hidden = [
        'department_id',
        'country_id',
        'identify_id',
        'status_id'
    ];

    /**
     * Get the Country associated with the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Country(): BelongsTo
    {
        return $this->BelongsTo(Country::class, 'country_id', 'country_id');
    }

    /**
     * Get the Identify associated with the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Identify(): BelongsTo
    {
        return $this->BelongsTo(Identify::class, 'identify_id', 'identify_id');
    }

    /**
     * Get the Departments associated with the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Departments(): BelongsTo
    {
        return $this->BelongsTo(Departments::class, 'department_id', 'department_id');
    }

    /**
     * Get the Status associated with the Employees
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Status(): BelongsTo
    {
        return $this->BelongsTo(Status::class, 'status_id', 'status_id');
    }
}
