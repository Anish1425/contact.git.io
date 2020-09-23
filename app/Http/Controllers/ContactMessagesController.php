<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessagesController extends Controller
{
   public function create()
   {

    return view('welcome');

   }
  public function store(Request $request)


 {

 	dd($request->all());
 }

}
