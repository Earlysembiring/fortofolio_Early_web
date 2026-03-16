@extends('dashboard.layout')

@section('konten')
<div class="pb-3"><a href="{{ route('halaman.index') }}" class= "btn btn- secondary" 
    <<kembali</a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('halaman.store') }}" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input
            type="text"
            class="form-control @error('judul') is-invalid @enderror"
            name="judul"
            id="judul"
            placeholder="judul"
            value="{{ old('judul') }}"
            class="form-control form-control-sm"
            required
        />
    
            </div>
                <div class="mb-3">
        <label for="isi" class="form-label">isi</label>
        <textarea class="form-control" rows="5" name="isi"></textarea>

      </div>
      <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>  
@endsection