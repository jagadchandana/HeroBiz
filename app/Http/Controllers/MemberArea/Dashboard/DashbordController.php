<?php

namespace App\Http\Controllers\MemberArea\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberArea\ParentController;
use App\Notifications\Welcome\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends ParentController
{
   public function index(){

        $user = auth::user();
        $user->notify(new UserNotification());

        return view('member-area.pages.home.dashbord');
   }
}
