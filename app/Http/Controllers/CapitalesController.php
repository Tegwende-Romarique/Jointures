<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capitale;
use App\Pays;

class CapitalesController extends Controller
{

    public function create()
    {
        $capital = Capitale::all();
        $pays = Pays::all();
     return view('/accueil', ['capitale'=>$capital, 'pays'=>$pays]);   
    }

    
    function store($id=null,Request $request)
    {
        if($id){
        $capital=Capitale::find($id);
       
        $capital->capitale=$request->capitale;
        $capital->population=$request->population;
        $capital->save();
         return redirect('liste-etudiant');
       
        }
        else{
            Capitale::create([ 
                'capitale'=>$request->capitale,
                'population'=>$request->population,
               
            ]);
            return back(); 
        }
    }

}
