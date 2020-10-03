<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class pizzaController extends Controller
{
  public function index() {

   // $pizzas = Pizza::all();
   //$pizzas = Pizza::orderBy()('name', 'desc')->get();
   //$pizzas = Pizza::where('type', 'hawaiian')->get();
   $pizzas = Pizza::latest()->get();

    return view('pizzas.index', [
        'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
      $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', ['pizza' => $pizza]);

  }

  public function create() {
      return view('pizzas.create');
  }
}