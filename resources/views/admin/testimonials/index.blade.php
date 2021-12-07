<x-app-layout>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Berita</h1>
                    <div class="card-body">
				    <a href="{{route('testimonials.create')}}" class="btn btn-success">Tambah Data</a>
				    <br/></br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th width="5%">No.</th>
                                        <th>Nama</th>
                                        <th>Perusahaan</th>
                                        <th>Isi</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead class="list">
                                        <tr>

                                    @foreach ($Testimonials as $row)
                                        <tr  class="text-dark">
                                                <td width="5%">{{$loop->iteration}}</td>
                                                <td>{{$row->nama}}</td>
                                                <td>{{$row->perusahaan}}</td>
                                                <td align="justify">{!!$row->isi!!}</td>
                                                <td>
                                                    <img src="{{asset('storage/testimonials/'.$row->foto)}}" height="200">
                                                    
                                                </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{route('testimonials.edit', $row->id)}}">Edit</a>
                                                    <a class="dropdown-item" onclick="return confirm('Anda yakin menghapus ')" href="testimonials/delete/{{$row -> id}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </x-app-layout>
            <!-- End of Main Content -->