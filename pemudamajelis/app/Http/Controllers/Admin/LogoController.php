<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\logo;
class LogoController extends Controller
{
    public function index(){
        $title = 'Logo';
        $data = logo::all();
        return view('admin.logo.index',compact('data','title'));
    }

    public function add(){
    	// $title = 'Tambah Logo';
        // $data = logo::all();

    	// return view('admin.logo.add',compact('title','data'));
    }

    public function store(Request $request){
    	// $this->validate($request,[
        //     'title'=>'required',
        //     'url'=>'required',       
    	// ]);

    	// $file = $request->file('image');

    	// $data = array();

    	// if($file){
    	// 	$destinationPath = 'uploads';
    	// 	$file->move($destinationPath,$file->getClientOriginalName());
        //     $data['title'] = $request->title;
        //     $data['logo'] = $file->getClientOriginalName();
        //     $data['url'] = $request->url;
    	// }else{
        //     $data['title'] = $request->title;
        //     $data['url'] = $request->url;
    	// }

    	// \DB::table('logo')->insert($data);

    	// \Session::flash('sukses','Data berhasil di input');

    	// return redirect('admin/logo');
    }

    public function edit($id){
        $title = 'Edit Logo';
        $lg = \DB::table('logo')->find($id);
        // dd($title);
        return view('admin.logo.edit',compact('title','lg'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'url'=>'required',       
    	]);

    	$file = $request->file('image');

    	$data = array();

    	if($file){
    		$destinationPath = 'uploads';
    		$file->move($destinationPath,$file->getClientOriginalName());
            $data['title'] = $request->title;
            $data['logo'] = $file->getClientOriginalName();
            $data['url'] = $request->url;
    	}else{
            $data['title'] = $request->title;
            $data['url'] = $request->url;
    	}

    	\DB::table('logo')->update($data);

    	\Session::flash('sukses','Data berhasil di input');

    	return redirect('admin/logo');
    }
}
