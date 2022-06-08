<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\APIBaseController;

class AdminController extends APIBaseController
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function json()
    {
        $users = DB::select('select * from users');
        foreach ($users as $user) {
            $age = Carbon::parse($user->dob)->diff(Carbon::now())->y;
            $user->age = $age;
        }
        return $this->sendResponse($users, 'Users retrieved successfully');
    }

}
