<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeeInfoController extends Controller
{
    public function show(){
        $users = User::select('id', 'nome', 'cognome', 'email', 'telefono', 'numero_ufficio')
        ->orderBy('cognome', 'asc')
        ->get();
        return view('employee-info', ['users' => $users]);
    }
}
