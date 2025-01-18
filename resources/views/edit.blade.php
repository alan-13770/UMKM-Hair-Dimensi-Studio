@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Konten</h2>
    <ul class="nav nav-tabs" id="editTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="aboutus-tab" data-bs-toggle="tab" data-bs-target="#aboutus" type="button" role="tab">About Us</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button" role="tab">Service</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="hero-tab" data-bs-toggle="tab" data-bs-target="#hero" type="button" role="tab">Hero Section</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="galeri-tab" data-bs-toggle="tab" data-bs-target="#galeri" type="button" role="tab">Galeri Pangkas</button>
        </li>
    </ul>
    <div class="tab-content" id="editTabContent">
        <!-- About Us Tab -->
        <div class="tab-pane fade show active" id="aboutus" role="tabpanel">
            <form action="{{ route('admin.updateAboutUs', $aboutus->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-3">
                    <label for="penjelasan" class="form-label">Penjelasan</label>
                    <textarea class="form-control" id="penjelasan" name="penjelasan" rows="5" required>{{ $aboutus->penjelasan }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan About Us</button>
            </form>
        </div>

        <!-- Service Tab -->
        <div class="tab-pane fade" id="service" role="tabpanel">
            <form action="{{ route('admin.updateService', $service->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-3">
                    <label for="jenis_service" class="form-label">Jenis Service</label>
                    <input type="text" class="form-control" id="jenis_service" name="jenis_service" value="{{ $service->jenis_service }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $service->harga }}" required>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                    <textarea class="form-control" id="detail" name="detail" rows="5">{{ $service->detail }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Service</button>
            </form>
        </div>

        <!-- Hero Section Tab -->
        <div class="tab-pane fade" id="hero" role="tabpanel">
            <form action="{{ route('admin.updateHeroSection', $heroSection->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $heroSection->judul }}" required>
                </div>
                <div class="mb-3">
                    <label for="penjelasan" class="form-label">Penjelasan</label>
                    <textarea class="form-control" id="penjelasan" name="penjelasan" rows="5" required>{{ $heroSection->penjelasan }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    @if($heroSection->gambar)
                        <p>Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $heroSection->gambar) }}" alt="Hero Image" class="img-fluid" style="max-width: 200px;">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Simpan Hero Section</button>
            </form>
        </div>

        <!-- Galeri Pangkas Tab -->
        <div class="tab-pane fade" id="galeri" role="tabpanel">
            <form action="{{ route('admin.updateGaleriPangkas', $galeriPangkas->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-3">
                    <label for="jenis_pangkas" class="form-label">Jenis Pangkas</label>
                    <input type="text" class="form-control" id="jenis_pangkas" name="jenis_pangkas" value="{{ $galeriPangkas->jenis_pangkas }}" required>
                </div>
                <div class="mb-3">
                    <label for="penjelasan" class="form-label">Penjelasan</label>
                    <textarea class="form-control" id="penjelasan" name="penjelasan" rows="5" required>{{ $galeriPangkas->penjelasan }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    @if($galeriPangkas->gambar)
                        <p>Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $galeriPangkas->gambar) }}" alt="Galeri Pangkas" class="img-fluid" style="max-width: 200px;">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Simpan Galeri Pangkas</button>
            </form>
        </div>
    </div>
</div>
@endsection
