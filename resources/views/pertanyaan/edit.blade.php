@extends('main')
@section('header', 'Edit Pertanyaan')

@section('content')

<form method="POST" action="/pertanyaan/{{$pertanyaan->id}}">
    @method('patch')
    @csrf
    <p class="font-weight-bold ml-4" style="inline">User : {{ Auth::user()->name }}</p>
    <input hidden type="text" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
      <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" readonly name="judul" value="{{$pertanyaan->judul}}">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea type="text" class="form-control" id="isi" name="isi" value="">{{$pertanyaan->isi}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    <button type="reset" class="btn btn-primary mt-3">Reset</button>
  </form>

@endsection