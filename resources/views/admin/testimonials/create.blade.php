<x-app-layout>
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Tambah Berita</h2>
            <form class="form-horizontal" method="post" action="{{route('testimonials.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="perusahaan">Perusahaan</label>
                    <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" id="perusahaan"  name="perusahaan" value="{{old('perusahaan')}}">
                    @error('perusahaan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{old('foto')}}">
                    @error('foto')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control @error('isi') is-invalid @enderror" rows="4" id="isi" name="isi" value="{{old('isi')}}"></textarea>
                    @error('isi')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
</x-app-layout>