<?php

namespace App\Http\Controllers\admin\publisher;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Publishers;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Publishers::paginate(10);
        return view('admin.publisher.index',['data'=>$data]);
    }
    public function create()
    {
        return view('admin.publisher.create');
    }
    public function store(Request $request)
    {



        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = Publishers::create($all);
        if ($insert) {
            return redirect()->back()->with('status', 'book publisher add success');
        } else {
            return redirect()->back()->with('status', 'book publisher add error');
        }
    }

    public function edit($id){
        $data = Publishers::where('id','=',$id)->get();
        return view('admin.publisher.edit',['data'=>$data]);
    }


    public function update(Request $request){
        $id = $request->route('id');
        $all = $request->except('_token'); 
        $all['selflink'] = mHelper::permalink($all['name']);
        $update = Publishers::where('id','=',$id)->update($all);
        if ($update) {
            return redirect()->back()->with('status','Publisher Edited');  
        }else{
            return redirect()->back()->with('status','Publisher Dont Edited');
        }
    }

    public function delete($id){
        $del = Publishers::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
