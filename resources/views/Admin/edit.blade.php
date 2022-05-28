@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <form action="{{ route('update', $data->id ) }}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="mb-3 m-4">
                        <label class="form-label">Kategori</label>
                        <select name="category_id" class="form-control">
                            <option value="">Pilih kategori</option>
                            @foreach($kategori as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 m-4">
                        <label class="form-label">name</label>
                        <input type="text" class="form-control" name="title">
                        <label class="form-label">prince</label>
                        <input type="text" class="form-control" name="prince">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="excerpt"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div> 
@endsection