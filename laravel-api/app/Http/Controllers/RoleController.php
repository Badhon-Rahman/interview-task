<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    
    public function create()
    {
        return view('role');
    }

    /**
     * Handle an incoming role create request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return  -new created role @$role
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

       return $role;
    }
}
