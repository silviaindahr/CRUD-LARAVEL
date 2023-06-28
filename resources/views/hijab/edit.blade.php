<form action="/hijab/{{$hijab->id}}" method="POST">
    @method('put')
    @csrf


    @extends('layout.master')

@section('content')

    <div class="container">
    <h1>Edit Data</h1>
        <form action="/hijab/store" method="POST">
            @csrf
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Hijab</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$hijab->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warna</label>
                <input type="text" name="warna" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$hijab->warna}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Size</label>
                <input type="text" name="size" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$hijab->size}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stok</label>
                <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$hijab->no_hp}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$hijab->alamat}}">
            </div>
            <input type="submit" name="submit" class="btn btn-info" Value="Save">

        </form>
    </div>
   
@endsection