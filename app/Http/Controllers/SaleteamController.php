<?php

namespace App\Http\Controllers;

use App\Models\Saleteam;
//use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleteamController extends Controller
{
    public function index()
    {
        $saleteams = DB::table('saleteam')->get();
        return view('saleteam.index', ['saleteams' => $saleteams]);
    }
    public function create()
    {
        return view('saleteam.create');
    }
    public function listofname(Request $request)
    {
        $data = $request->validate([
            'teamName' => 'required|max:20',

        ]);

        $newSaleteam = Saleteam::create($data);

        return redirect(route('saleteam.index'));
    }
    public function edit(Saleteam $saleteam)
    {

        return view('saleteam.edit', ['saleteam' => $saleteam]);
    }
    public function update(Saleteam $saleteam, Request $request)
    {
        $data = $request->validate([
            'teamName' => 'required|max:20',
        ]);

        $saleteam->update($data);

        return redirect(route('saleteam.index'))->with('success', 'Saleteam updated successfully');
    }

    public function destroy(Saleteam $saleteam)
    {
        $saleteam->delete();
        return redirect(route('saleteam.index'))->with('success', 'saleteam delete successfully');
    }
}
