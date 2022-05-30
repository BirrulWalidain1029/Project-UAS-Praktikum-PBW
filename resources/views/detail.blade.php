@extends('master')
 
@section('title')
{{ $article->judul }}
@endsection
 
@section('main')
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
    <div class="p-4">
        <h2>{{ $article->judul }}</h2>
        <p class="mt-5">{{ $article->deskripsi }}</p>
    </div>
</div>
@endsection
 
@section('sidebar')
<div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
   <center> 
        <a href="/"> 
            <button class="btn btn-info text-white w-100">Kembali</button> 
        </a>
    </center>
</div>
@endsection