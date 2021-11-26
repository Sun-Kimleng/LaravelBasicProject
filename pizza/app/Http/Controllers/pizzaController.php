<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pizzaController extends Controller
{
    public function index(){
        return view('pizza');
    }

    public function show($id){
    
    //use $id variable to query the db for a record

    return view('details', ['id' => $id]);

    }
}
