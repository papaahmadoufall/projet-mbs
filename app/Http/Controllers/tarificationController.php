<?php

namespace App\Http\Controllers;

use App\Models\tarification;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class tarificationController extends Controller
{
    public function showTarification()
    {
        $tarification = tarification::all();
        return view('dashboard.tarification',['tarification' => $tarification]);
    }
    public function addTarification(Request $request)
    {
            $tarification = new tarification();
            $tarification->pays  = $request->pays;
            $tarification->category  = $request->category;
            $tarification->prix = $request->prix;
            $tarification->nom = $request->nom;
            $tarification->save();
            Toastr::success("Tarification  $request->nom  ajouter avec succes :)",'Success');
            return redirect()->route('listTarification');
    }
    public function destroy($id){
        $tarificationDelete = tarification::find($id);
        $res=tarification::where('id',$id)->delete();
        Toastr::success("Tarification suprimer avec succes :)",'Success');

        return redirect()->route('listTarification');
    }
}
