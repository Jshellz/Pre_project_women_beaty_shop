<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $users = DB::select('select * from users');

        foreach ($users as $user) {
            echo $user->name;
        }

        return \view('user.index', ['users' => $users]);

    }
}
