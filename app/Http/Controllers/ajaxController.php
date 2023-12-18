<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ajax;

class ajaxController extends Controller
{
    public function insert(Request $request)
    {
        $data=new ajax;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->pwd=$request->pwd;
        $data->save();

        return 'ok';
    }

    public function select()
    {
        $data=ajax::all();
        $html='';
        foreach($data as $d)
        {
            $html.="<tr><td>{$d->id}</td><td>{$d->name}</td><td>{$d->email}</td><td>{$d->pwd}</td><td><button><a href='/edit2/{{$d->id}}' class='btn btn-info' id='edit'>Edit</button><button>Delete</button></td>tr>";
        }
        return $html;
    }

    public function index()
    {
        $data=ajax::all();
        return view('index',compact('data'));
    }
    // public function edit()
    // {
    //     return view('ajaxedit');
    // }

    public function edit(Request $request)
    {
        $data=ajax::find($request->id);
        $id=$data->id;
        return $id; 
    }

    public function edit1($id)
    {
        $data=ajax::find($id);
        return view('ajaxedit',compact('data'));
    }
    public function edit2($id)
    {
        $data=ajax::find($id);
        return view('ajaxinsert',compact('data'));
    }

    public function update(Request $request)
    {
        $data=ajax::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->pwd=$request->pwd;
        $data->save();
        // return "ok";
        return redirect("index",compact("data"));
    }

    public function delete($id)
    {
        $data = ajax::find($id);
        $data->delete();

        return redirect('index');
    }
}
