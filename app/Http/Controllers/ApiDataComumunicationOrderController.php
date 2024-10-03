<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataComumunicationOrder;
class ApiDataComumunicationOrderController extends Controller
{
    public function store(Request $request)
    {  
       
        $input = $request->all();
     
   
        DataComumunicationOrder::create($input);
        return response()->json(['message'=>'تم تسجيل طلبك    ']);
    }
}
