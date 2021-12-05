<x-app-layout>
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Tambah Produk</h2>
            <form class="form-horizontal" method="post" action="{{route('produk.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="produk">Produk</label>
                    <input type="text" class="form-control @error('produk') is-invalid @enderror" id="produk"  name="produk" value="{{old('produk')}}">
                    @error('produk')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"  name="foto" value="{{old('foto')}}">
                    @error('foto')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" rows="4" id="deskripsi" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
</x-app-layout>