<?php
namespace App\Http\Controllers;
   

use Illuminate\Http\Request;

   
class AjaxController extends Controller
{

    public function ajaxRequestPost(Request $request){
        dd($request->all());
            $step = $request->step;

            switch($step){
                case 1:
                    dd($request->all());
                    break;
                    case 2:
                    dd($request->all());
                    break;
            }
    }
}