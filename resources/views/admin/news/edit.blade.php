<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h2 class="text-center pt-4">Edit Berita</h2>
                <form class="form-horizontal" method="post" action="{{route('news.update', $news->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"  name="judul" value="{{$news->judul}}">
                        @error('judul')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis"  name="penulis" value="{{$news->penulis}}">
                        @error('penulis')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{$news->foto}}">
                        @error('foto')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" rows="4" id="isi" name="isi" value="">{{$news->isi}}</textarea>
                        @error('isi')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="kategori"></label> <br>
                        <select class="form-control" name="kategori" id="kategori" aria-label="Default select example" value="{{$news->kategori}}">
                            <option disabled-selected>{{$news->kategori}}</option>
                            <option value="Sample 1">Sample 1</option>
                        </select>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
    
            </div>
        </div>
    </div>
    </x-app-layout>