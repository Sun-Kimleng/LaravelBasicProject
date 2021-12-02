<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;
use Illuminate\Support\Facades\DB;

class pizzaController extends Controller
{
    public function index(){

        //interact with database

        // $pizzas = pizza::where('name','Eii Eii')->orderBy('name')->get();

        // $pizzas = DB::select('select * from pizza');

        $pizzas = pizza::all();

        // dd($pizzas); //to check your query
        return view('pizza', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id){
    
    //use $id variable to query the db for a record

    return view('details', ['id' => $id]);

    }
}
