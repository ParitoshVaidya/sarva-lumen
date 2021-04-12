<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

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
        $employees = Employee::find($id);
        return response()->json($employees);
    }

    public function getByParams(Request $request)
    {
        $matchParams = $request->all();
        unset($matchParams['sort']);
        $sort = request('sort', 'id');

        $employees = Employee::where($matchParams)->orderBy($sort, 'asc')->get();

        if ($employees) {
            return response()->json($employees);
        }

        return response()->json();
    }

}
