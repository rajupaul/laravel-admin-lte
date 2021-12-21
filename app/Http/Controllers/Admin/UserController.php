<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data=[
            'title'=>'Users'
        ];
        return view('admin.users.index',$data);
    }
}
