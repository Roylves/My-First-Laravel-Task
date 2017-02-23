<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class FileController extends Controller
{
    public function productList(Request $request){
        $users = User::paginate(3);
        if ($request->ajax()) {
            return view('presult', compact('users'));
        }
        return view('productlist',compact('users'));
    }
}
