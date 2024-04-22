<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Courrier;

class CourrierController extends Controller
{
    public function add()
    {
        return view('backend.courriers.add');
    }

    public function store(Request $request)
    {

        // dd($request->file('fichier'), (Carbon::now())->format('F') );

        $path = $request->file('fichier')->store('courriers/' . (new Carbon)->year . '/' . (Carbon::now())->format('F') );

        // dd($path);

        Courrier::create([
            'numero' => $request->numero,
            'expediteur' => $request->expediteur,
            'destinataire' => $request->destinataire,
            'type' => $request->type,
            'file' => $path,
        ]);

        return redirect()->route('admin.dashboard')->with(['success' => 'Votre courrier a ete bien enregistrer']);
    }
}
