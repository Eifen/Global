<?php

namespace App\Http\Controllers;

use App\Filters\EmployeesFilter;
use App\Models\Employees;
use App\Http\Requests\StoreEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;
use App\Http\Resources\EmployeesCollection;
use App\Http\Resources\EmployeesResource;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private $relations = [
        'departments',
        'identify',
        'country',
        'status'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Devolvemos los empleados
        $filter = new EmployeesFilter();
        $qItems = $filter->transform($request);
        //Acomodamos la informacion de los empleados
        $employees = Employees::where($qItems)
            ->with($this->relations);
        //Mantenemos el filtro incluso en la paginacion
        return new EmployeesCollection($employees->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeesRequest $request)
    {
        //
        return new EmployeesResource(Employees::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $employeeId)
    {
        //
        $employees = Employees::findOrFail($employeeId);
        return new EmployeesResource($employees->loadMissing($this->relations));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employees $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeesRequest $request, int $employeeId)
    {
        //
        $employees = Employees::findOrFail($employeeId);
        $employees->update($request->all());
        return [
            'response' => true,
            'message' => "Employee #$employeeId has been updated"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employees $employees)
    {
        //
    }
}
