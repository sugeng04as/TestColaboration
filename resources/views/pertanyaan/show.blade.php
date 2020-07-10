@extends('main')
@section('header', 'Index Pertanyaan')

@section('content')

<div class="card" style="width: 100%;">

    <div class="card-body">
      <h5 class="card-title">{{$pertanyaan->id}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$pertanyaan->judul}}</h6>
      <p class="card-text">{{$pertanyaan->isi}}</p>
      <p class="card-text">{{$pertanyaan->created_at}}</p>
        @foreach($pertanyaan->tags as $tag) 
            <button class="btn btn-info btn-sm"> {{$tag->nama}} </button>
        @endforeach
    </div>
</div>

@endsection