<x-app-layout>
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Tambah Berita</h2>
            <form class="form-horizontal" method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"  name="judul" value="{{old('judul')}}">
                    @error('judul')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis"  name="penulis" value="{{old('penulis')}}">
                    @error('penulis')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{old('foto')}}"></input>
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

                <div class="form-group">
                    <label for="kategori"></label> <br>
                    <select class="form-control" name="kategori" id="kategori" aria-label="Default select example" value="{{old('kategori')}}">
                        <option value="Sample 1">Sample 1</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
</x-app-layout>