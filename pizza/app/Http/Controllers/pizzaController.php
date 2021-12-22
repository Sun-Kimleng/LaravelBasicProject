<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PizzaController extends Controller
{
    public function home(){
        $data = [
            'logged' => User::where('id','=', session('logged'))->first(),
        ];
        return view('welcome', $data);
    }

    public function index(){

        //interact with database

        // $pizzas = pizza::where('name','Eii Eii')->orderBy('name')->get();

        // $pizzas = DB::select('select * from pizza');

        $pizzas = pizza::all(); 

        $logged = User::where('id','=', session('logged'))->first();

        // dd($pizzas); //to check your query
        return view('pizzas/index', [
            'pizzas' => $pizzas,
            'logged'=> $logged,
        ]);
    }

    public function show($id){
    
    //use $id variable to query the db for a record

        $pizza = pizza::findOrFail($id);
        
            $logged = User::where('id','=', session('logged'))->first();
        
        return view('pizzas.show', ['pizza'=>$pizza, 'logged'=> $logged]);

    }

    public function create(){
        $logged = User::where('id','=', session('logged'))->first();
        return view('pizzas.create', ['logged'=> $logged]);
    }

    public function store(Request $request){
        
        
        $pizza = new pizza(); //pizza is the model that we created

        $request->validate([
            'type' => 'required',
            'name' => 'required|regex:/^[a-zA-Z]+$/',
            'base' => 'required'
        ],

        [
            'name.required' => 'cannot be empty',
            'name.regex' => 'Enter only characters'
        ]
    );
        
        //get data from user-input
        $pizza->type = request('type');
        $pizza->name = request('name'); 
        $pizza->base = request('base');
        $pizza->toppings = request('toppings') ?? 'none';

        //error->log($pizza); //to testing output in terminal
        $pizza->save();

        $msg = 'Congratulation! you have successful ordered the pizza';

        return redirect('/')->with('msg', $msg);
    }

    public function destroy($id){

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
