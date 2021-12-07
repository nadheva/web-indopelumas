<x-guest-layout>
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="portfolio-details mt-5" >
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Berita dan Artikel</p>
      </div>

      <div class="row">

        <div class="col-lg-9">
          @foreach ($semuaberita as $item)
          <div class="card mb-3">
            <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22697%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20697%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17d8b54401a%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A35pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17d8b54401a%22%3E%3Crect%20width%3D%22697%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22258.9751281738281%22%20y%3D%22105.54557991027832%22%3E697x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
            <div class="card-body">
              <h4  class="card-title"><a href="{{url('news-article', $item->id)}}">{{$item->judul}} </a></h4>
              <p class="card-text">{{$item->isi}}</p>
              <p class="card-text"><small class="text-muted">{{$item->penulis}} - {{$item->created_at}}</small></p>
            </div>
          </div>
          @endforeach
        </div>

        <div class="col-lg-3">
          <div class="portfolio-info">
            <h3>Top News & Article</h3>
            <ul>
              @foreach ($semuaberita as $item)
              <li><a href="#">{{ $item->judul }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
</x-guest-layout>