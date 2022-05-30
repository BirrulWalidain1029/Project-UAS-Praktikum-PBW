@extends('master')
 
@section('title', 'Menambah Materi')
 
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>Judul Materi</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul materi">
        </div>
        <div class="form-group">
            <label>Isi Materi</label>
            <textarea class="form-control" name="deskripsi" rows="15"></textarea>
        </div>
</div>
@endsection
 
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label>Upload</label>
        <input type="submit" class="form-control btn btn-primary" value="Upload">
    </div>
</div>
</form>
@endsection