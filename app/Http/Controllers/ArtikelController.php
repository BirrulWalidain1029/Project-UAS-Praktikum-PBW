<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class ArtikelController extends Controller
{
    public function show()
    {
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        return view('show', ['articles'=>$articles]);
    }
 
    public function add()
    {
        return view('add');
    }
 
    public function add_process(Request $article)
    {
        DB::table('artikel')->insert([
            'judul'=>$article->judul,
            'deskripsi'=>$article->deskripsi
        ]);
        return redirect()->action('ArtikelController@show');
    }
    public function detail($id)
    {
        $article = DB::table('artikel')->where('id', $id)->first();
        return view('detail', ['article'=>$article]);
    }
    public function tampilanAdmin()
    {
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        return view('tampilan-admin', ['articles'=>$articles]);
    }
    public function edit($id)
    {
        $article = DB::table('artikel')->where('id', $id)->first();
        return view('edit', ['article'=>$article]);
    }
    public function edit_process(Request $article)
    {
        $id = $article->id;
        $judul = $article->judul;
        $deskripsi = $article->deskripsi;
        DB::table('artikel')->where('id', $id)
                            ->update(['judul' => $judul, 'deskripsi' => $deskripsi]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect()->action('ArtikelController@tampilanAdmin');
    }

    public function delete($id)
    {
        
        DB::table('artikel')->where('id', $id)
                            ->delete();
 
        Session::flash('success', 'Materi berhasil dihapus');
        return redirect()->action('ArtikelController@tampilanAdmin');
    }
}