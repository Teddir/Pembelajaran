@extends('index')

@section('title', 'Data Artikel')

@section('container')
<div class="container mt-5">
    
    <form action="/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="image">Name</label>
          <input type="file" class="form-control @error('image') is-invalid  @enderror" id="image" name="image" placeholder="Name" value="{{ old('image') }}">
          @error('image')
          <div class=" invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control  @error('judul') is-invalid
        @enderror" id="judul" name="judul" aria-describedby="text" value="{{ old('judul') }}">
        @error('judul')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
      <div class="form-group">
          <label for="kategori">Kategori</label>
          <select class="form-control  @error('kategori') is-invalid
          @enderror" name="kategori" id="kategori" >
            <option>Agama</option>
            <option>Pendidikan</option>
            <option>Sejarah</option>
          </select>
          <div class="invalid-feedback">Mohon Diisi</div>
        </div>
        <div class="form-group">
            <label for="desc">Isi Artikel</label>
            <textarea class="form-control @error('desc') is-invalid
            @enderror" name="desc" id="desc" value="{{ old('desc') }}" cols="30" rows="10"></textarea>
            @error('desc')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
