<?php

namespace App\Http\Controllers\PublicArea\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestMembershipController extends Controller
{
    public function index(){
        return view('public-area.pages.RequestMembership.membership');
    }
}
