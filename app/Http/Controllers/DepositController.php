<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deposits = Deposit::all();
        return view('manage-deposits', compact('deposits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deposits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'collocazione' => 'required',
            'deposito' => 'required',
            'codice_stanza' => 'required',
        ]);

        Deposit::create($request->all());

        return redirect()->route('deposits.index')
            ->with('success', 'Deposit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Deposit $deposit)
    {
        return view('deposits.show', compact('deposit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $deposit=DB::table('deposits')->where('id', $id)->get();
        $deposit=$deposit->first();
        return view('deposits.edit', compact('deposit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'collocazione' => 'required',
            'deposito' => 'required',
            'codice_stanza' => 'required',
        ]);

        // Find the deposit by ID
        $deposit = Deposit::findOrFail($id);

        // Update the deposit with the new data
        $deposit->update($request->all());

        // Redirect to the deposits index with a success message
        return redirect()->route('deposits.index')
            ->with('success', 'Deposit updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deposit = Deposit::findOrFail($id);

        $deposit->delete();

        return redirect()->route('deposits.index')
            ->with('success', 'Deposit deleted successfully.');
    }
}
