@extends('main')
@section('header', 'Index Pertanyaan')

@section('content')

<form method="POST" action="/pertanyaan">
    @csrf
    <p class="font-weight-bold ml-4" style="inline">User : {{ Auth::user()->name }}</p>
    <input hidden type="text" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" placeholder="Masukkan judul...!" name="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea type="text" class="form-control" id="isi" placeholder="Masukkan isi...! "name="isi"></textarea>
    </div>
    <div class="form-group">
        <label for="tag">Tags</label>
        <input type="text" class="form-control" id="tags" placeholder="Masukkan tag...! "name="tags">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    <button type="reset" class="btn btn-primary mt-3">Reset</button>
  </form>

@endsection