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
                <td style="width: 25%">
                    <a href="/" class="badge badge-info">Update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="pertanyaan/create" class="btn btn-primary">Tambah Pertanyaan +</a>
@endsection