<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda_controller extends Controller
{
    public function detail($artikel_id){
    	$artikel = \DB::table('artikel as a')->join('users as u','a.user_id','=','u.id')->where('a.artikel_id',$artikel_id)->first();
    	$komentar = \DB::table('komentar')->where('artikel_id',$artikel_id)->get();
    	$total_komentar = \DB::table('komentar')->where('artikel_id',$artikel_id)->count();

    	return view('detail',compact('artikel','komentar','total_komentar'));
    }

    public function komentar(Request $request, $artikel_id){
    	\DB::table('komentar')->insert([
    		'artikel_id'=>$artikel_id,
    		'nama'=>$request->nama,
    		'email'=>$request->email,
    		'website'=>$request->website,
    		'isi'=>$request->isi,
    		'created_at'=>date('Y-m-d H:i:s')
    	]);

    	return redirect('detail/'.$artikel_id);
    }

    public function artikel_kategori($kategori_id){
        $data = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.id_kategori')->where('a.id_kategori',$kategori_id)->select('a.judul','a.isi','a.tanggal','a.gambar','a.created_at','k.nama as kategori','a.artikel_id')->orderby('created_at','desc')->get();

        return view('kategori',compact('data'));
    }
}
