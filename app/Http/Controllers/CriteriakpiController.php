<?php

namespace App\Http\Controllers;

use App\Models\Criteriakpi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriteriakpiController extends Controller
{
    public function index()
    {
        $criteriakpis = DB::table('criteriakpi')->get();
        return view('criteriakpi.index', ['criteriakpis' => $criteriakpis]);
    }
    public function create()
    {
        return view('criteriakpi.create');
    }
    public function listofname(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:20',

        ]);

        $newCriteriakpi = Criteriakpi::create($data);

        return redirect(route('criteriakpi.index'));
    }
    public function edit(Criteriakpi $criteriakpi)
    {

        return view('criteriakpi.edit', ['criteriakpi' => $criteriakpi]);
    }
    public function update(Criteriakpi $criteriakpi, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:20',
        ]);

        $criteriakpi->update($data);

        return redirect(route('criteriakpi.index'))->with('success', 'criteriakpi updated successfully');
    }

    public function destroy(Criteriakpi $criteriakpi)
    {
        $criteriakpi->delete();
        return redirect(route('criteriakpi.index'))->with('success', 'criteriakpi delete successfully');
    }
}
