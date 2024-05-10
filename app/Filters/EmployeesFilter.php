<?php

namespace App\Filters;

use Illuminate\Http\Request;

class EmployeesFilter extends ApiFilter
{
    //Parametros a filtrar
    protected $safeParams = [
        'firstLastName' => ['eq', 'lk'],
        'firstName' => ['eq', 'lk'],
        'otherName' => ['eq', 'lk'],
        'countryId' => ['eq', 'lk'],
        'identifyId' => ['eq', 'lk'],
        'identifyNumber' => ['eq', 'lk'],
        'email' => ['eq', 'lk'],
        'admissionDate' => ['eq', 'gt', 'gte', 'lt', 'lte', 'lk'],
        'departmentId' => ['eq', 'lk'],
        'statusId' => ['eq', 'dif', 'lk'],
    ];
    //Como queremos filtrar
    protected $columnMap = [
        'firstLastName' => 'first_lastname',
        'firstName' => 'first_name',
        'otherName' => 'other_name',
        'countryId' => 'country_id',
        'identifyId' => 'identify_id',
        'identifyNumber' => 'identify_number',
        'admissionDate' => 'admission_date',
        'departmentId' => 'department_id',
        'statusId' => 'status_id'
    ];
    //Mapeamos los operadores
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
        'dif' => '!=',
        'lk' => 'LIKE'
    ];
}
