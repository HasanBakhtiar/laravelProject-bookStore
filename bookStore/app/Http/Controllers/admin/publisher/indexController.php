<?php

namespace App\Http\Controllers\admin\publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('admin.publisher.index');
    }
    public function create(){
        return view('admin.publisher.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        dd($all);
    }
}
