<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Servicios;

class SearchCroller extends Controller
{
  public function servicios(Request $request){
    $tem = $request->get('tem');
    $querys = servicios::where('name', 'LIKE'. '%' . $tem . '%')->get();
    
    $data = [];
    foreach ($querys as $querys){
        $data[]=[
            'label' => $querys->name
        ];
    }
    return $data;
  }
}
