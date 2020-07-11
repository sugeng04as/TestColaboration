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
            <button class="btn btn-outline-primary btn-sm" style="background-color: rgb(191, 210, 253); width: 1.5cm;"> {{$tag->nama}} </button>
        @endforeach
    </div>
</div>
<button class="btn btn-outline-success mt-1 ml-2"><i class="far fa-comments" aria-hidden="true"></i></button>

@endsection