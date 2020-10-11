<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index()
    {   
        $items = Item::orderBy('id', 'desc')->get();
        return view('user.index',['items' => $items]);
    }

}
