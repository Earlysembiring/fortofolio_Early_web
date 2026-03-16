@extends('dashboard.layout')

@section('konten')
<div class="pb-3"><a href="{{ route('documentation.index') }}" class="btn btn-secondary btn-sm">&lt;&lt; kembali</a></div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('documentation.update', $documentation->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="judul" class="form-label fw-bold">Judul</label>
        <input
            type="text"
            class="form-control form-control-lg @error('judul') is-invalid @enderror"
            name="judul"
            id="judul"
            placeholder="Judul"
            value="{{ old('judul', $documentation->judul) }}"
            required
        />
        @error('judul')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="isi" class="form-label fw-bold">Isi</label>
        <textarea
            class="form-control @error('isi') is-invalid @enderror"
            name="isi"
            id="isi"
            rows="12"
            placeholder="Masukkan isi documentation"
            style="min-height: 300px;"
        >{{ old('isi', $documentation->isi) }}</textarea>
        @error('isi')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-lg">UPDATE</button>
    <a href="{{ route('documentation.index') }}" class="btn btn-secondary btn-lg">BATAL</a>
</form>

@endsection
