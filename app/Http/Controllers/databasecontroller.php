<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class databasecontroller extends Controller
{
    public function store(){

      $name = request('name');
      $emailAddress = request('emailAddress');
      }
}
