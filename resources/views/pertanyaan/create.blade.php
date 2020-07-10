@extends('main')
@section('header', 'Index Pertanyaan')

@section('content')

<form method="POST">
    @csrf
    <p class="font-weight-bold ml-4" style="inline">User : {{ Auth::user()->name }}</p>
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" placeholder="Masukkan judul...!">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea type="text" class="form-control" id="isi" placeholder="Masukkan isi...! "></textarea>
    </div>
    <div class="form-group">
        <label for="tag">Tags</label>
        <input type="text" class="form-control" id="tag" placeholder="Masukkan tag...! ">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    <button type="reset" class="btn btn-primary mt-3">Reset</button>
  </form>

@endsection