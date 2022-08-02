<?php

namespace App\Http\Controllers\MemberArea;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TesterController extends Controller
{
   public function index(){
        return view('member-area.components.tester');
   }
}
