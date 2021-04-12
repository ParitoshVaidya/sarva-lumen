<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);

    }

    public function getById($id)
    {
        $product = Employee::find($id);

        return response()->json($product);
    }

    public function getByParams()
    {
        $salary = request('salary');
        $zip_code = request('zip_code');

        $matchParams = ['salary' => $salary];

        $employees = Employee::where($matchParams)->get();

        if ($employees) {
            return response()->json($employees);
        }

        return response()->json();
    }

}
