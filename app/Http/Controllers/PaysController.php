<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capitale;
use App\Pays;


class PaysController extends Controller
{
   
    public function index()
    {
        $capital = Capitale::all();
        $pays = Pays::all();

        DB::table('pays')
        ->join('capitale', 'pays.id', '=', 'capitale.pays_id')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.id', 'contacts.phone', 'orders.price')
        ->get();

     return view('Jointures/liste', ['capitale'=>$capital, 'pays'=>$pays]);   
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
