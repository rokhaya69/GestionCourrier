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

        $path = $request->file('fichier')->store('public/courriers/' . (new Carbon)->year . '/' . (Carbon::now())->format('F') );
         $pathdb = ltrim($path, "public");

        Courrier::create([
            'numero' => $request->numero,
            'expediteur' => $request->expediteur,
            'destinataire' => $request->destinataire,
            'type' => $request->type,
            'file' => $pathdb,
        ]);

        return redirect()->route('admin.dashboard')->with(['flash_success' => 'Votre courrier a ete bien enregistrer']);
    }
}
