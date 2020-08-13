<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capitale;
use App\Pays;
use DB;


class PaysController extends Controller
{
   
    public function index()
    {
      $data = DB::table('pays')
             ->join('capitales', 'capitales.id', '=', 'pays.capitale_id')
             ->select('pays.nom', 'pays.president', 'capitales.capitale', 'capitales.population')
             ->get();
     return view('Jointures/liste', compact('data'));   
    }

    function store($id=null,Request $request)
    {
        if($id){
        $pays=Pays::find($id);
        $pays->capitale_id=$request->capitale_id;
       
        $pays->nom=$request->nom;
        $pays->president=$request->president;
        $pays->save();
         return redirect('liste-etudiant');
       
        }
        else{
            Pays::create([ 
                'capitale_id'=>$request->capitale_id,
                'nom'=>$request->nom,
                'president'=>$request->president,
                
               
            ]);
            return back(); 
            }
        }
}
