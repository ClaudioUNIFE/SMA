<?php

namespace App\Http\Controllers;

use App\Models\Xit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class XitsController extends Controller
{

    public function show($id)
    {
        $xits = Xit::where('id_reperto', $id)->get();
        return view('manage-xits', compact('xits'));
    }

    




}
