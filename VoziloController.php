<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vozilo;
use Illuminate\Support\Facades\DB;

class VoziloController extends Controller
{
    public function index()
    {
        $vozilo = DB::table('vozilo')->get();
        return view('vozilo.index', ['vozila' => $vozilo]);
    }

    public function create()
    {
        return view('vozilo.create');
    }

    public function store(Request $request)
    {
        $validacija = $request->validate([
            'proizvodjac' => 'required',
            'model' => 'required',
            'godina_proizvodnje' => 'required|integer|between:1950,2020',
            'registarska_oznaka' => 'max:7',
            'broj_vrata' => 'required|between:2,4|integer',
            'boja' => 'required',
            'tip_pogonskog_goriva' => 'required',
            'zapremina_motora' => 'numeric',
            'snaga_motora' => 'numeric'
        ]);
        Vozilo::create($validacija);
        return redirect('vozilo')->with('message', 'Uspjesno dodato vozilo!');
    }
    public function edit(Vozilo $vozilo)
    {
        return view('vozilo.edit', ['vozilo' => $vozilo]);
    }
    public function update(Request $request, Vozilo $vozilo)
    {
        
        $validacija = $request->validate([
            'proizvodjac' =>'required',
            'model' =>'required',
            'godina_proizvodnje' =>'required|integer|between:1950,2020',
            'registarska_oznaka' =>'nullable|max:7',
            'broj_vrata' =>'required|between:2,4|integer',
            'boja' =>'required',
            'tip_pogonskog_goriva' =>'required',
            'zapremina_motora' =>'numeric|nullable|min:0',
            'snaga_motora' =>'nullable|numeric|min:0'
        ]);
        $vozilo->update($validacija);
        return redirect('vozilo')->with('message', 'Promijenili ste informacije!');
    }
    public function destroy(Vozilo $vozilo)
    {
        $vozilo->delete();
        return redirect('vozilo');
    }
}
