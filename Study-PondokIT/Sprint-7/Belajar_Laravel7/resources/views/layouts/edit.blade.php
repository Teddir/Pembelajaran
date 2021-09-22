@extends('index')

@section('title', 'Data Artikel')

@section('container')
<div class="container mt-5">
    
<form action="/update/{{ $artikel->id}}" method="post" enctype="multipart/form-data">
      @method('post')
        @csrf
        <div class="form-group">
          <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control" id="judul" name="judul" aria-describedby="text" value="{{ $artikel->judul }}">
        </div>
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select class="form-control  @error('kategori') is-invalid
          @enderror" name="kategori" id="kategori" value="{{ $artikel->kategori }}" >
            <option>Agama</option>
            <option>Pendidikan</option>
            <option>Sejarah</option>
          </select>
          <div class="invalid-feedback">Mohon Diisi</div>
        </div>
        <div class="form-group">
            <label for="desc">Isi Artikel</label>
            <input type="text" class="form-control" name="desc" id="desc" value="{{ $artikel->desc }}">
          </div> 
          <div class="form-group">
            <label for="image">Image</label>
            <input type="hidden" name="old_image" id="old_image"  value="{{ $artikel->image }}" >
            <input type="file" class="form-control @error('image') is-invalid  @enderror" id="image" name="image" placeholder="{{ $artikel->image }}">
            @error('image')
            <div class=" invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
