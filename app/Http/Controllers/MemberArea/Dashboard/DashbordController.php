<?php

namespace App\Http\Controllers\MemberArea\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    /**
     * @return [type]
     */
    public function index(){
        return view('member-area.layouts.member-layout');
    }
}
