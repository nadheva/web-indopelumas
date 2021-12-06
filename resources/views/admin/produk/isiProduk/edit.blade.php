<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h2 class="text-center pt-4">Edit Produk</h2>
                <form class="form-horizontal" method="post" action="{{route('updateisiproduk', $isiproduk->produk_slug)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul Produk</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"  name="judul" value="{{$isiproduk->judul}}">
                        <input type="hidden" name="produk_slug" value="{{$isiproduk->produk_slug}}">
                        @error('judul')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Produk</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" rows="4" id="isi" name="isi" value="{{$isiproduk->isi}}"></textarea>
                        @error('isi')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
    
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
    
            </div>
        </div>
    </div>
    </x-app-layout>