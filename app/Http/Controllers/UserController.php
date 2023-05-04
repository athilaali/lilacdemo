<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Designation;
use App\Models\Department;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['designation', 'department'])->get();
        return view('index', compact('users'));
    }

    public function search(Request $request)
    {

        $searchUsers = [];
        $searchUsers = User::with(['designation', 'department'])
            ->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search_text . '%')
                    ->orWhereHas('department', function ($query) use ($request) {
                        $query->where('name', 'like', '%' . $request->search_text . '%');
                    })
                    ->orWhereHas('designation', function ($query) use ($request) {
                        $query->where('name', 'like', '%' . $request->search_text . '%');
                    });
            })
            ->get();

        return view("search", compact('searchUsers'));
    }

    private function UserExist($users, $userID)
    {
        foreach ($users as $user) {
            if ($user->id == $userID) {
                return true;
            }
        }
        return false;
    }
}
