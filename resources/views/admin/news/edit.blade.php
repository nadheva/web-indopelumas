<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h2 class="text-center pt-4">Edit Berita</h2>
                @foreach($news as $row)
                <form class="form-horizontal" method="post" action="{{route('news.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$row->id}}">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"  name="judul" value="{{$row->judul}}">
                        @error('judul')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tgl_post">Tanggal</label>
                        <input type="date" class="form-control @error('tgl_post') is-invalid @enderror" id="tgl_post"  name="tgl_post" value="{{$row->tgl_post}}">
                        @error('tgl_post')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="short_news">Short News</label>
                        <textarea class="form-control @error('short_news') is-invalid @enderror" rows="3" id="short_news" name="short_news" value="{{$row->short_news}}"></textarea>
                        @error('short_news')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="news">News</label>
                        <textarea class="form-control @error('news') is-invalid @enderror" rows="4" id="news" name="news" value="{{$row->news}}"></textarea>
                        @error('news')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="kategori"></label> <br>
                        <select class="form-control" name="kategori" id="kategori" aria-label="Default select example" value="{{$row->kategori}}">
                            <option disabled selected>{{$row->kategori}}</option>
                            <option value="Proses TTD Pimpinan">Sample 1</option>
                        </select>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
                @endsection
            </div>
        </div>
    </div>
    </x-app-layout>