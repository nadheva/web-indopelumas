<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h2 class="text-center pt-4">Edit Produk</h2>
                <form class="form-horizontal" method="post" action="{{route('produk.update', $produk->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    {{-- <input type="hidden" name="id" value="{{ $row->id }}"> --}}
                    <div class="form-group">
                        <label for="produk">Produk</label>
                        <input type="text" class="form-control @error('produk') is-invalid @enderror" id="produk"  name="produk" value="{{$produk->produk}}">
                        @error('produk')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"  name="foto" value="{{$produk->foto}}">
                        @error('foto')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" rows="4" id="deskripsi" name="deskripsi" value="">{{$produk->deskripsi}}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
    
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>
    </x-app-layout>