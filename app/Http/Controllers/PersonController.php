<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        $value = 'foo';
      return view('person.index')->with('varname',$value);
    }

    public function someOtherView(){
        $data = array(
            'varname' => $value,
            'subarray' => ['item1', 'item2'] // in example, his array is 'services' - does this imply you can pass in objects?
        );
        return view('template')->with($data);
    }
}
