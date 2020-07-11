@extends('main')
@section('header', 'Index Pertanyaan')

@section('content')
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Judul</th>
                <th style="text-align: center">Pertanyaan Id</th>
                <th style="text-align: center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pertanyaan as $tanya)    
            <tr>
                <td style="width: 10%">{{($loop->iteration)}}</td>
                <td style="width: 45%">{{($tanya->judul)}}</td>
                <td style="width: 20%">{{($tanya->user_id)}}</td>
                <td style="width: 10%;">
                    <a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-warning btn-sm" style="width: 30px;" ><i class="fas fa-edit" ></i></a>
                    <a href="/pertanyaan/{{$tanya->id}}" class="btn btn-info btn-sm" style="width: 30px;"><i class="fas fa-info" ></i></a>
                    <form class="d-inline" type="submit" action="/pertanyaan/{{ $tanya->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" style="width: 30px;"><i class="far fa-trash-alt"></i></button>
                    </form>                  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="pertanyaan/create" class="badge badge-primary" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i>
    </a>
@endsection