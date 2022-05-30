@extends('master')
 
@section('title', 'Belajar')
 
@section('header')
    <center>
        <h2>Materi</h2>
        <a href="/add"><button class="btn btn-success">Tambah Materi</button></a>
    </center>
@endsection
 
@section('main')
    @foreach ($articles as $article)
    <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
            <img src="{{ asset('image/materi.jpg') }}" class="card-img-top" alt="gambar" >
            <div class="card-body">
                <h5 class="card-title">{{ $article->judul }}</h5>
                <a href="/detail/{{ $article->id }}" class="btn btn-primary">Baca Materi</a>
            </div>
        </div>
    </div>
   @endforeach
@endsection