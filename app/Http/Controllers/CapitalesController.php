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
     return view('Jointures/form', ['capitale'=>$capital, 'pays'=>$pays]);   
    }

    public function index()
    {
        
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



    // public function store(Request $request)
    // {
    //     $capital=new Capitale();
    //     $capital->nom=$request->nom;
    //     $capital->population=$request->population;
    //     $capital->save();

    //     return redirect('Jointures/form');

    // }
}
