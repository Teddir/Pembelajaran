@extends('index')

@section('title', 'Data Artikel')

@section('container')

<div class="container mt-5">
    <a href="/tambah"><button type="submit" class="btn btn-primary mt-1">Tambah Data</button></a>

  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<table class="table table-striped mt-2">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Kategori</th>
        <th scope="col">Isi kategori</th>
        <th scope="col">Gambar</th>        
        <th scope="col-2">Aksi</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($artikel as $item)
        <tr>
          <th scope="row">{{ $loop->iteration}}</th>
          <td>{{ $item->judul }}</td>
          <td>{{ $item->kategori }}</td>
          <td>{{ $item->desc }}</td>
          <td><img src="image/{{ $item->image }}" alt="{{ $item->image }}" height="50" widht="50"></td>
          <td>
          <a href="/{{ $item->id }}/edit"><button class="btn btn-info">Update</button></a>
          </td>
          <td>
          <form action="{{ $item->id }}/delete" method="post">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>  
        </tr>
        @endforeach
    </tbody>
  </table>
  <script>
  // var namaBintang = 'ayam'
  //   var namaBinatang = 'ayam'
  //   var $variable = 'variable'
  //   var n4m4S4y$ = 'nama saya'
  //   var _pondokIT = 'bisa'
  //   // var 4shared = 'gak boleh pake angka di depan'
    var panjang = 5
    var lebar = 8
    var c = 3
    var d = 3 
    // console.log(a + b)
    console.log(panjang * lebar)
    // console.log(c * b / b)
    // console.log(c == d)
    // console.log( a == b)
    // console.log( a < b)
    // console.log( a += 3)
    
    console.log(true && true);
    console.log(true && false);
    console.log(true || false);
    console.log(false || false);
    console.log(!false);
  // document.write(namaBintang + $variable + n4m4S4y$ + _pondokIT +  a)
  </script>
</div>
@endsection
