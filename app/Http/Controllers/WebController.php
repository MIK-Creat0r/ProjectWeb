<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function konten()
    {
        return view ('konten');
    }

    public function about()
    {
        return view ('about');
    }

    public function register()
    {
        return view ('register');
    }

    public function index()
    {
        $books = DB::table('books')->get();
        return view('index',['books' => $books]);
    }

    public function cari($id)
    {
        $books = DB::table('books')->where('idBuku',$id)->get();
        return view('index',['books' => $books]);
    }

    public function tambah(Request $request)
    {   
        $request -> file('file') -> storeAs('public',$request->idBuku);

        DB::table('books')->insert([
            'idBuku' => $request -> idBuku,
            'namaBuku' => $request -> namaBuku,
            'namaPengarang' => $request -> namaPengarang,
            'kategori' => $request -> kategori,
            'qty' => $request -> qty,
            'image' => $request -> idBuku
        ]);
        return redirect('/');
    }

    public function hapus($id)
    {
        $book = DB::table('books')->where('idBuku',$id)->delete();
        return redirect('/');
    }

    public function show($id)
    {
        $buku = DB::table('books')->where('idBuku',$id)->get();
        return view('update',['books' => $buku]);
    }

    public function edit(Request $request)
    {   

        DB::table('books')->where('idBuku',$request->idBuku)->update([
            'namaBuku' => $request -> namaBuku,
            'namaPengarang' => $request -> namaPengarang,
            'kategori' => $request -> kategori,
            'qty' => $request -> qty
        ]);
        return redirect('/');
    }
}
