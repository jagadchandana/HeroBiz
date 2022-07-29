<?php

namespace App\Http\Controllers\MemberArea\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberArea\ParentController;
use Illuminate\Http\Request;

class DashbordController extends ParentController
{
   public function index(){
        return view('member-area.pages.home.dashbord');
   }
}
