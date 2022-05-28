@extends('layouts.admin')

@section('content')
<div class="comtainer">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                   <h1 class="text-center">Database</h1>
                    <div class="float-end btn btn-dark "><a class="text-light" href="{{ route('create') }}"> Tambah Data</a></div>
                </div>
                <div class="card-body">
                    <table class="table table-nowrap">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama</th>
                                <th>category</th>
                                <th>prince</th>
                                <th>images</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->category->name }}</td>
                                <td>{{ $row->prince }}</td>
                                <td>{{ $row->images }}</td>
                                <td>{{ $row->excerpt }}</td>
                                <td><a class="btn btn-primary" href="{{ route('edit', $row->id) }}">edit</a></td>
                                <td><a class="btn btn-danger" href="{{ route('destroy', $row->id) }}">hapus</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection