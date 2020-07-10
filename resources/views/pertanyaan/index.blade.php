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
                <td style="width: 15%;">
                    <a href="/" class="badge badge-warning"><i class="fas fa-user-edit" style="font-size: 12px; width: 1cm;"></i></a>
                    <a href="/pertanyaan/{{$tanya->id}}" class="badge badge-primary"><i class="fas fa-info" style="font-size: 12px; width: 1cm;"></i></i></a>
                    <a href="/" class="badge badge-danger"><i class="far fa-trash-alt" style="font-size: 12px; width: 1cm;"></i></i></a>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="pertanyaan/create" class="btn btn-primary">Tambah Pertanyaan +</a>
@endsection