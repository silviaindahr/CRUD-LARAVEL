<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
    </nav>
    <div class="container">
      <a class="btn btn-primary" href="/hijab/create">Add Hijab</a>
      <table class="table table-striped">
        <tr>
          <th>NAMA HIJAB</th>
          <th>WARNA</th>
          <th>SIZE</th>
          <th>STOK HIJAB</th>
          <th>HARGA</th>
          <th>AKSI</th>
        </tr>
        @foreach($hijab as $h)
                <tr>
                    <td>{{$h->nama}}</td>
                    <td>{{$h->warna}}</td>
                    <td>{{$h->size}}</td>
                    <td>{{$h->no_hp}}</td>
                    <td>{{$h->alamat}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/hijab/{{$h->id}}/edit">Edit</a>
                        <form action="/hijab/{{$h->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                        </div>
                    </td>
                </tr>
    </div>
            @endforeach
        </table>
        </div>
</body>
</html>
