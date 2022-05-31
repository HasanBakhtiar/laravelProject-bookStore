<?php

namespace App\Http\Controllers\admin\publisher;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Publisher;
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
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = Publisher::create($all);
        if ($insert) {
            return redirect()->back()->with('status','book publisher add success');
        }else{
            return redirect()->back()->with('status','book publisher add error');
        }
        
    }
}
