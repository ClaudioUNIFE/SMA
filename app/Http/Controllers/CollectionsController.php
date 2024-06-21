<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;

class CollectionsController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        return view('manage-collections', compact('collections'));
    }

    public function create()
    {
        return view('collection.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'data_acquisizione_collezione' => 'required',
            'descrizione' => 'required',
            'nome_collezione' => 'required',
        ]);

        Collection::create($request->all());

        return redirect()->route('collection.index')
            ->with('success', 'Collezione creata con successo.');
    }

    public function edit($id)
    {
        $collection=DB::table('collections')->where('id',$id)->get();
        $collection=$collection->first();

        return view('collection.edit', compact('collection'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'data_acquisizione_collezione' => 'required',
            'descrizione' => 'required',
            'nome_collezione' => 'required',
        ]);

        $collection=Collection::findOrFail($id);

        $collection->update($request->all());

        return redirect()->route('collection.index')
            ->with('success', 'Collezione aggiornata con successo.');
    }

    public function destroy($id)
    {
        $collection=Collection::findOrFail($id);

        $collection->delete();

        return redirect()->route('collection.index')
            ->with('success', 'Collezione eliminata con successo.');
    }
}
